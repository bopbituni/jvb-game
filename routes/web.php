<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('aoe')->middleware('auth')->group(function () {
    Route::get('show-link-survey/{token}', [SurveyController::class, 'createSurveyDone'])->name('aoe.show_link_survey');
    Route::get('create-link-survey', [SurveyController::class, 'indexLinkSurvey'])->name('aoe.get_link_survey');
    Route::post('create-link-survey', [SurveyController::class, 'createLinkSurvey'])->name('aoe.post_link_survey');
    // Setup team
    Route::get('set-up-team', [SurveyController::class, 'setUpTeam'])->name('aoe.set_up_team');
    Route::post('finish-game', [SurveyController::class, 'finishGame'])->name('aoe.finish_game');
    // Profile Gamers
    Route::get('project-gamers', [SurveyController::class, 'showProfileGamer'])->name('aoe.profile_gamers');
});

Route::get('{game}/survey/{token}', [SurveyController::class, 'showSurveyFormPage'])->name('survey.index');
Route::post('{game}/survey/{token}', [SurveyController::class, 'storeSurveyFormPage'])->name('survey.store');
Route::get('{game}/survey/done/{token}', [SurveyController::class, 'doneSurveyFormPage'])->name('survey.done');


require __DIR__.'/auth.php';
