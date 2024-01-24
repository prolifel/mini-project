<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecordController;
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
    return redirect(route('record.index'));
    // return view('welcome');
})->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->get('/record/report', [RecordController::class, 'report'])->name('record.report');
Route::middleware('auth')->post('/record/report', [RecordController::class, 'detailReport'])->name('record.detail');
Route::middleware('auth')->get('/record/graph', [RecordController::class, 'graph'])->name('record.graph');
Route::middleware('auth')->post('/record/table', [RecordController::class, 'table'])->name('record.table');
Route::middleware('auth')->resource('record', RecordController::class);

require __DIR__ . '/auth.php';
