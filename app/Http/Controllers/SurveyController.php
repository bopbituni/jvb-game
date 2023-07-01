<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Gamer;
use App\Models\History;
use App\Models\Survey;
use App\Models\SurveyLink;
use Carbon\Carbon;
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
            Survey::updateOrCreate(['gamer_id' => $data['gamer_id'], 'survey_link_id' => $data['survey_link_id']], $data);

            return redirect()->route('survey.done', ['game' => $game, 'token' => $token]);
        } catch (Exception $e) {
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

    public function setUpTeam() {
        $gamers = Survey::with('gamer')
                ->join('survey_link', 'survey_link.id', '=', 'survey.survey_link_id')
                ->where('survey_link.expire_time', '>', Carbon::now())
                ->get();
        $setUpTeam = [];
        //Số lượng top hiện tại
        $t1 = $t2 = $t3 = $t4 = 1;
        //Số lượng top tham gia
        $n_top2 = $n_top3 = 0;
        foreach ($gamers as &$gamer) {
            if ($gamer->gamer->top == 1 && $t1 <= 2) {
                $setUpTeam["{$gamer->gamer->top}-1"] = [['name' => 'Minh', 'id' => 1], ['name' => 'Tuấn', 'id' => 2]];
                $setUpTeam["{$gamer->gamer->top}-2"] = [['name' => 'Sơn', 'id' => 3], ['name' => 'Tiến', 'id' => 4]];
            } else if ($gamer->gamer->top == 2 && $t2 <= 2) {
                $n_top2++;
                $setUpTeam["{$gamer->gamer->top}-$t2"][] = ['name' => $gamer->gamer->name, 'id' => $gamer->gamer_id];
                if ($n_top2 > 2) {
                    $top = $gamer->gamer->top + 1;
                    $setUpTeam["{$top}-$t2"][] = ['name' => $gamer->gamer->name, 'id' => $gamer->gamer_id];
                    unset($setUpTeam["{$gamer->gamer->top}-$t2"][$n_top2 - 1]);
                }
            } else if ($gamer->gamer->top == 3 && $t3 <= 2) {
                $n_top3++;
                $setUpTeam["{$gamer->gamer->top}-$t3"][] = ['name' => $gamer->gamer->name, 'id' => $gamer->gamer_id];
                if ($n_top3 > 2) {
                    $top = $gamer->gamer->top + 1;
                    $setUpTeam["{$top}-$t2"][] = ['name' => $gamer->gamer->name, 'id' => $gamer->gamer_id];
                    unset($setUpTeam["{$gamer->gamer->top}-$t3"][$n_top3 - 1]);
                }
            } else if ($gamer->gamer->top == 4 && $t4 <= 2) {
                $setUpTeam["{$gamer->gamer->top}-$t4"][] = ['name' => $gamer->gamer->name, 'id' => $gamer->gamer_id];
            }
        }

        return view('aoe.set_up_team', compact('setUpTeam'));
    }

    public function finishGame(Request $request) {
        $surveyLink = SurveyLink::where('expire_time', '>', Carbon::now())->first();
        if (!$surveyLink) {
            return;
        }

        if ($request->has('team1')) {
            foreach ($request->name_team1 as $team1) {
                History::create([
                    'is_win' => 1,
                    'gamer_id' => $team1,
                    'game_id' => 'aoe'
                ]);
                $quantity = Asset::where(['gamer_id' => $team1])->first() ?? 0;
                Asset::updateOrCreate(['gamer_id' => $team1], ['name' => "Húc", 'quantity' => $quantity['quantity'] + 1]);
            }
            foreach ($request->name_team2 as $team2) {
                History::create([
                    'is_win' => 0,
                    'gamer_id' => $team2,
                    'game_id' => 'aoe'
                ]);
                $quantity = Asset::where(['gamer_id' => $team2])->first() ?? 0;
                Asset::updateOrCreate(['gamer_id' => $team2], ['name' => "Húc", 'quantity' => $quantity['quantity'] - 1]);
            }
        } elseif ($request->has('team2')) {
            foreach ($request->name_team1 as $team1) {
                History::create([
                    'is_win' => 0,
                    'gamer_id' => $team1,
                    'game_id' => 'aoe'
                ]);
                $quantity = Asset::where(['gamer_id' => $team1])->first() ?? 0;
                Asset::updateOrCreate(['gamer_id' => $team1], ['name' => "Húc", 'quantity' => $quantity['quantity'] - 1]);
            }
            foreach ($request->name_team2 as $team2) {
                History::create([
                    'is_win' => 1,
                    'gamer_id' => $team2,
                    'game_id' => 'aoe'
                ]);
                $quantity = Asset::where(['gamer_id' => $team2])->first() ?? 0;
                Asset::updateOrCreate(['gamer_id' => $team2], ['name' => "Húc", 'quantity' => $quantity['quantity'] + 1]);
            }
        }

        $surveyLink->update([
            'expire_time' => Carbon::now()
        ]);
    }

    public function showProfileGamer() {
        $assets = Asset::with('gamer')->get();
        $gamers = $quantity = [];
        foreach ($assets as $asset) {
            $gamers[] = $asset->gamer->name;
            $quantity[] = $asset->quantity;
        }

        return view('aoe.profile_gamers', compact('gamers', 'quantity'));
    }
}
