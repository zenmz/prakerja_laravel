<?php

use App\Http\Controllers\SekolahController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});


Route::get('hello', function () {
    return 'Hello';
});

Route::get('umur/{id}/{id2}', function ($id, $id2) {
    return 'Hasil nilai : ' . $id+$id2;
});

Route::get('coba', function () {
    return view('coba');
});

Route::get('template', function () {
    return view('template');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('table', function () {
    $data = ['kucing', 'anjing', 'gajah', 'kuda'];
    // $data = [
    //     'hewan'=> ['kucing', 'anjing', 'gajah', 'kuda'],
    //     'buah' => ['apel', 'jeruk', 'pisang', 'strawberry'],
    // ];
    return view('table', compact('data'));
});

// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('tambahdata', [SiswaController::class, 'create']);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('siswa', SiswaController::class);
    Route::resource('sekolah', SekolahController::class);
});

Route::resource('upload', UploadController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
