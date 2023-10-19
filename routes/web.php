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

//Menampilkan data
Route::get('/user', [UserController::class, 'index'])->name('user.daftarPengguna'); //menampilkan return view blade
Route::get('/koleksi', [CollectionController::class, 'index'])->name('koleksi.daftarKoleksi');

//Route khusus mengambil data (tanpa view)
Route::get('/getData', [UserController::class, 'getData'])->name('user.getData');
Route::get('/getKoleksi', [CollectionController::class, 'getKoleksi'])->name('getKoleksi'); // get data yajra

//Add User & Koleksi
Route::get('/koleksiTambah', [CollectionController::class, 'create'])->name('koleksi.registrasi');
Route::post('/koleksiStore', [CollectionController::class, 'store'])->name('koleksi.store'); //menyimpan data setelah di tambah

//Show user & Koleksi by ID
Route::get('/koleksiView/{koleksi}', [CollectionController::class, 'show'])->name('koleksi.infoKoleksi');
Route::get('/userView/{user}', [UserController::class, 'show'])->name('user.infoPengguna');

//Update
Route::put('/koleksiUpdate', [CollectionController::class, 'update'])->name('koleksi.update');
Route::put('/userUpdate', [UserController::class, 'update'])->name('user.update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Route::post('/userRegistration', [UserController::class, 'create'])->name('user.registrasi');