<?php

use App\Http\Controllers\CollectionController;
use App\Models\User;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Tugas
// Achmad Dani Saputra | 6706223131
Route::get('/user', [UserController::class, 'index'])->name('user.daftarPengguna');
Route::get('/getData', [UserController::class, 'getData'])->name('user.getData'); //get data yajra
Route::get('/getKoleksi', [CollectionController::class, 'getKoleksi'])->name('getKoleksi'); // get data yajra
Route::post('/userRegistration', [UserController::class, 'create'])->name('user.registrasi');
Route::get('/userView/{user}', [UserController::class, 'show'])->name('user.infoPengguna');
Route::get('/koleksi', [CollectionController::class, 'index'])->name('koleksi.daftarKoleksi');
Route::post('/koleksiStore', [CollectionController::class, 'store'])->name('koleksi.store');
Route::get('/koleksiTambah', [CollectionController::class, 'create'])->name('koleksi.registrasi');
Route::get('/koleksiView/{collection}', [CollectionController::class, 'show'])->name('koleksi.infoKoleksi');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
