<?php

namespace App\Http\Controllers;

use App\Models\Gamer;
use App\Models\Survey;
use App\Models\SurveyLink;
use Exception;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function indexLinkSurvey() {
        return view('aoe.create_survey');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public function showSurveyFormPage(Request $request, $game, $token)
    {
        try {
            $this->checkToken($token);
            $survey = SurveyLink::where(['token' => $token])->first();
            $gamers = Gamer::all();
            $desc = json_decode($survey['description']);

            switch($desc->title) {
                case 0:
                    $desc->title = "1 vs 1";
                    break;
                case 1:
                    $desc->title = "2 vs 2";
                    break;
                case 2:
                    $desc->title = "3 vs 3";
                    break;
                case 3:
                    $desc->title = "4 vs 4";
                    break;
            }

            switch($desc->unit_type) {
                case 0:
                    $desc->unit_type = "Cung R Shang";
                    break;
                case 1:
                    $desc->unit_type = "Cung R Assyrian";
                    break;
                case 2:
                    $desc->unit_type = "Random";
                    break;
            }
            
            if ($desc->bet == 0) {
                $desc->bet = "Húc";
            } else {
                $desc->bet = "Tiền mặt";
            }

            if ($desc->play_time == 0) {
                $desc->play_time = "Sáng";
            } else {
                $desc->play_time = "Chiều";
            }

            return view('aoe.survey', compact('gamers', 'desc', 'game', 'token', 'survey'));
        } catch (Exception $e) {
            dd($e->getMessage());
            abort(404);
        }
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public function storeSurveyFormPage(Request $request, $game, $token)
    {
        try {
            $this->checkToken($token);

            $data = $request->except('_token');
            $isCheckRegister = Survey::where([
                'gamer_id' => $data['gamer_id'],
                'is_play' => Gamer::YES,
                'survey_link_id' => $data['survey_link_id']
            ])->first();

            if ($isCheckRegister) {
                abort(404);
            }
            Survey::create($data);

            return redirect()->route('survey.done', ['game' => $game, 'token' => $token]);
        } catch (Exception $e) {
            dd($e->getMessage());
            abort(404);
        }
    }

    public function doneSurveyFormPage($game, $token)
    {
        return view('aoe.survey_done');
    }
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public function createLinkSurvey(Request $request)
    {
        try {
            $desc = json_encode($request->except('_token'));
            $game = "aoe"; 
            $token = $this->randomString(32);
            $link = route('survey.index', ['game' => $game, 'token' => $token]);
            $expire_time = now()->addHours(3);
            SurveyLink::create([
                'description' => $desc,
                'token' => $token,
                'link' => $link,
                'expire_time' => $expire_time
            ]);
            return redirect()->route('aoe.show_link_survey', ['token' => $token]);
        } catch (Exception $e) {
            dd($e->getMessage());
            abort(404);
        }
    }

    public function createSurveyDone(Request $request, $token)
    {
        try {
            $this->checkToken($token);
            $survey = SurveyLink::where(['token' => $token])->first();
            if ($survey) {
                $link = $survey->link;
                return view('aoe.create_survey_done', compact('link'));
            }
        } catch (Exception $e) {
            dd($e->getMessage());
            abort(404);
        }
    }

    public function sortTeam() {
        try {
            $survey = SurveyLink::where('expire_time', '>', now())->first();
            $desc = json_decode($survey->description);
            switch ($desc->title) {
                case 0:
                    break;
                case 1:
                    break;
                case 2:
                    break;
                case 3:
                    break;
            }
        } catch (Exception $e) {

        }
    }

    private function randomString($length) {
        $str = random_bytes($length);
        $str = base64_encode($str);
        $str = str_replace(["+", "/", "="], "", $str);
        $str = substr($str, 0, $length);
        return $str;
    }

    private function checkToken($token) {
        $survey = SurveyLink::where(['token' => $token])->first();
        if (!$survey || now()->greaterThan($survey->expire_time)) {
            abort(404);
        }
    }
}
