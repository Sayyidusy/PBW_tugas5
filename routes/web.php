<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\CollectionController;
use App\Models\Collection;
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


//// Routing ke User Controller
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/userRegistration', [UserController::class, 'create'])->name('userRegistration');
Route::post('/userStore',[UserController::class, 'store'])->name('userStore');
Route::get('/userView/{user}',[UserController::class, 'show'])->name('userView');

//// Routing ke CollectionController
Route::get('/koleksi',[CollectionController::class, 'index'])->name('koleksi');
Route::get('/koleksiTambah',[CollectionController::class, 'create'])->name('koleksiTambah');
Route::post('/koleksiStore',[CollectionController::class, 'store'])->name('koleksiStore');
Route::get('/koleksiView/{collection}',[CollectionController::class, 'show'])->name('koleksiView');

// // Routing ke User Controller
// Route::get('/user', [UserController::class, 'index']);
// Route::get('/userRegistration', [UserController::class, 'create']);
// Route::post('/userStore',[UserController::class, 'store']);
// Route::get('/userView/{user}',[UserController::class, 'show']);

// // Routing ke CollectionController
// Route::get('/koleksi',[CollectionController::class, 'index']);
// Route::get('/koleksiTambah',[CollectionController::class, 'create']);
// Route::post('/koleksiStore',[CollectionController::class, 'store']);
// Route::get('/koleksiView/{collection}',[CollectionController::class, 'show']);

require __DIR__.'/auth.php';
