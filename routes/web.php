<?php

use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::resource('participant', ParticipantController::class);
Route::get('participant', [ParticipantController::class, 'index'])->name('participant.index');
Route::get('participant/create', [ParticipantController::class, 'create'])->name('participant.create');
Route::post('participant', [ParticipantController::class, 'store'])->name('participant.store');
Route::get('participant/{participant}', [ParticipantController::class, 'show']);
/*Route::get('participant', [ParticipantController::class, 'index']);
Route::get('participant', [ParticipantController::class, 'index']);
Route::get('participant', [ParticipantController::class, 'index']);*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
