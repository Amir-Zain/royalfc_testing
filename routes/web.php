<?php


use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\backend\ContactController as BContactController;
use App\Http\Controllers\backend\GalleryController as BGalleryController;
use App\Http\Controllers\backend\PlayerController as BPlayerController;
use App\Http\Controllers\backend\ImageController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\backend\ScoreboardController;
use App\Http\Controllers\backend\TeamController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\LeaguePlayerController;
use App\Http\Controllers\TeamController as FTeamController;
use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
    | Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//frontend routes
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
// Route::get('/events', function () {
//     return view('frontend.events');
// })->name('events');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.mail');
Route::get('/players', [PlayerController::class, 'index'])->name('players');
Route::get('/league', [LeagueController::class, 'index'])->name('league');
Route::get('/league/team/{id}', [FTeamController::class, 'index'])->name('team');


// backend routes
Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        return view('backend.index');
    })->name('admin');
    Route::get('/buttons', function () {
        return view('backend.buttons');
    });
    Route::get('/tables', function () {
        return view('backend.tables');
    });

    //admin
    Route::get('/admin/profile', [ProfileController::class, 'index'])->name('profile');

    /*
    Interface routes
    */

    //home
    Route::get('/admin/home-image', [ImageController::class, 'home'])->name('home.index');
    Route::get('/admin/home-image/{id}/edit', [ImageController::class, 'editHome'])->name('home.edit');
    Route::put('/admin/home-image/{id}/update', [ImageController::class, 'updateHome'])->name('home.update');

    //home
    Route::get('/admin/league-image', [ImageController::class, 'league'])->name('league.index');
    Route::get('/admin/league-image/{id}/edit', [ImageController::class, 'editLeague'])->name('league.edit');
    Route::put('/admin/home-image/{id}/update', [ImageController::class, 'updateLeague'])->name('league.update');

    //league_teams
    Route::get('/admin/team/view', [TeamController::class, 'index'])->name('team.index');
    Route::get('/admin/team/create', [TeamController::class, 'create'])->name('team.create');
    Route::post('/admin/team', [TeamController::class, 'store'])->name('team.store');
    Route::delete('/admin/team/{id}/delete', [TeamController::class, 'destroy'])->name('team.destroy');
    Route::get('/admin/team/{id}/edit', [TeamController::class, 'edit'])->name('team.edit');
    Route::put('/admin/team/{id}/update', [TeamController::class, 'update'])->name('team.update');

    // league_players
    Route::get('/admin/league-player/view', [LeaguePlayerController::class, 'index'])->name('leaguePlayer.index');
    Route::get('/admin/league-player/create', [LeaguePlayerController::class, 'create'])->name('leaguePlayer.create');
    Route::post('/admin/league-player', [LeaguePlayerController::class, 'store'])->name('leaguePlayer.store');
    Route::delete('/admin/league-player/{id}/delete', [LeaguePlayerController::class, 'destroy'])->name('leaguePlayer.destroy');
    Route::get('/admin/league-player/{id}/edit', [LeaguePlayerController::class, 'edit'])->name('leaguePlayer.edit');
    Route::put('/admin/league-player/{id}/update', [LeaguePlayerController::class, 'update'])->name('leaguePlayer.update');

    // league_scoreboard
    Route::get('/admin/scoreboard/view', [ScoreboardController::class, 'index'])->name('score.index');
    Route::get('/admin/scoreboard/create', [ScoreboardController::class, 'create'])->name('score.create');
    Route::post('/admin/scoreboard', [ScoreboardController::class, 'store'])->name('score.store');
    Route::delete('/admin/scoreboard/{id}/delete', [ScoreboardController::class, 'destroy'])->name('score.destroy');
    Route::get('/admin/scoreboard/{id}/edit', [ScoreboardController::class, 'edit'])->name('score.edit');
    Route::put('/admin/scoreboard/{id}/update', [ScoreboardController::class, 'update'])->name('score.update');

    //about
    Route::get('/admin/about-image', [ImageController::class, 'about'])->name('about.index');
    Route::get('/admin/about-image/{id}/edit', [ImageController::class, 'editAbout'])->name('about.edit');
    Route::put('/admin/about-image/{id}/update', [ImageController::class, 'updateAbout'])->name('about.update');

    //player
    Route::get('/admin/player/view', [BPlayerController::class, 'index'])->name('player.index');
    Route::get('/admin/player/create', [BPlayerController::class, 'create'])->name('player.create');
    Route::post('/admin/player', [BPlayerController::class, 'store'])->name('player.store');
    Route::delete('/admin/player/{id}/delete', [BPlayerController::class, 'destroy'])->name('player.destroy');
    Route::get('/admin/player/{id}/edit', [BPlayerController::class, 'edit'])->name('player.edit');
    Route::put('/admin/player/{id}/update', [BPlayerController::class, 'update'])->name('player.update');

    //gallery
    Route::get('/admin/image/view', [BGalleryController::class, 'index'])->name('image.index');
    Route::get('/admin/image/create', [BGalleryController::class, 'create'])->name('image.create');
    Route::delete('/admin/image/{id}/delete', [BGalleryController::class, 'destroy'])->name('image.destroy');
    Route::post('/admin/image/', [BGalleryController::class, 'store'])->name('image.store');

    //contact messages
    Route::get('/admin/messages', [BContactController::class, 'index'])->name('message.index');
    Route::delete('/admin/messages/{id}/delete', [BContactController::class, 'destroy'])->name('message.destroy');
});

// default routes comes with auth
Route::get('/register', [HomeController::class, 'index']);
Route::get('/forgot-password',  [HomeController::class, 'index']);
Route::get('/reset-password',  [HomeController::class, 'index']);
Route::get('/two-factor-challenge', [HomeController::class, 'index']);
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


// Route::get('/insert', function () {
//     $data = ['type' => 'about', 'image' => '80232210_2426639370775899_5856441190907379712_o.jpg'];
//     Image::create($data);
// });

// Route::get('/insert', function () {
//     User::create([
//         'name' => 'Amir',
//         'email' => 'tpamir71@gmail.com',
//         'password' => Hash::make('amir123!'),
//         'image' => '46291654_379318946157150_4937642364619234314_n.jpg'
//     ]);
// });
