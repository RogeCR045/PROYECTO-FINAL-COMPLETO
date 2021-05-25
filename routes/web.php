<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Models\Music;
use App\Models\User;
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
//Rutas personalizadas
Route::get('/musics/about', [MusicController::class, 'about'])->name('/musics/about');
Route::get('/users/cards', [UserController::class, 'cards'])->name('/users/cards');
Route::get('/animals/cards', [AnimalController::class, 'cards'])->name('/animals/cards');
Route::get('/contacts/cards', [ContactController::class, 'cards'])->name('/contacts/cards');
Route::get('/professions/cards', [ProfessionController::class, 'cards'])->name('/professions/cards');
Route::get('/musics/cards', [MusicController::class, 'cards'])->name('/musics/cards');
Route::get('/animals/import', [AnimalController::class, 'import'])->name('/animals/import');
Route::post('/animals/importData', [AnimalController::class, 'importData'])->name('/animals/importData');
Route::get('/contacts/import', [ContactController::class, 'import'])->name('/contacts/import');
Route::post('/contacts/importData', [ContactController::class, 'importData'])->name('/contacts/importData');
Route::get('/professions/import', [ProfessionController::class, 'import'])->name('/professions/import');
Route::post('/professions/importData', [ProfessionController::class, 'importData'])->name('/professions/importData');
Route::get('/musics/import', [MusicController::class, 'import'])->name('/musics/import');
Route::post('/musics/importData', [MusicController::class, 'importData'])->name('/musics/importData');
Route::get('/users/exportToXlsx', [UserController::class, 'exportToXlsx'])->name('/users/exportToXlsx');
Route::get('/animals/exportToXlsx', [AnimalController::class, 'exportToXlsx'])->name('/animals/exportToXlsx');
Route::get('/contacts/exportToXlsx', [ContactController::class, 'exportToXlsx'])->name('/contacts/exportToXlsx');
Route::get('/professions/exportToXlsx', [ProfessionController::class, 'exportToXlsx'])->name('/professions/exportToXlsx');
Route::get('/musics/exportToXlsx', [MusicController::class, 'exportToXlsx'])->name('/musics/exportToXlsx');
Route::get('/animals/chart', [AnimalController::class, 'chart'])->name('/animals/chart');
Route::get('/contacts/chart', [ContactController::class, 'chart'])->name('/contacts/chart');
Route::get('/professions/chart', [ProfessionController::class, 'chart'])->name('/professions/chart');
Route::get('/musics/chart', [MusicController::class, 'chart'])->name('/musics/chart');
Route::get('/exportUsersToCSV', [UserController::class, 'exportUsersToCSV'])->name('/exportUsersToCSV');
Route::get('/exportAnimalsToCSV', [AnimalController::class, 'exportAnimalsToCSV'])->name('/exportAnimalsToCSV');
Route::get('/exportContactsToCSV', [ContactController::class, 'exportContactsToCSV'])->name('/exportContactsToCSV');
Route::get('/exportProfessionsToCSV', [ProfessionController::class, 'exportProfessionsToCSV'])->name('/exportProfessionsToCSV');
Route::get('/exportMusicsToCSV', [MusicController::class, 'exportMusicsToCSV'])->name('/exportMusicsToCSV');

//Rutas del sistema y de tipo de rource
Route::get('/', function () {
    $users = User::all();
    $musics = Music::all()->take(5);
    return view('welcome')
    ->with('musics', $musics)
    ->with('users', $users);
});

Route::resources([
    'informations' =>InformationController::class,
    'musics' => MusicController::class,
    'professions'=>ProfessionController::class,
    'animals'=>AnimalController::class,
    'contacts'=>ContactController::class,
    'users'=>UserController::class,
]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
