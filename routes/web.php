<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChangepassController;
use App\Http\Controllers\CRUD\AkunController;
use App\Http\Controllers\CRUD\JenisController;
use App\Http\Controllers\CRUD\PelamarController;
use App\Http\Controllers\CRUD\PostController;
use App\Http\Controllers\CRUD\ServiceController;
use App\Http\Controllers\CRUD\SliderController;
use App\Http\Controllers\CRUD\TeamController;
use App\Http\Controllers\CRUD\TentangController;
use App\Http\Controllers\CRUD\TerimaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HrdController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route fontend
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/service', [HomeController::class, 'service']);
Route::get('/galery', [HomeController::class, 'galery']);
Route::get('/blog', [HomeController::class, 'info']);
Route::get('/blog/{post:slug}', [HomeController::class, 'detail']);
Route::get('/kontak', [HomeController::class, 'kontak']);

//route login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//route register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['user-role:admin']], function(){
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get("download/{id}", [PelamarController::class, 'download']);



    Route::resource('/admin/slider', SliderController::class);
    Route::resource('/admin/about', TentangController::class);
    Route::resource('/admin/team', TeamController::class);
    Route::resource('/admin/jenis', JenisController::class);
    Route::resource('/admin/service', ServiceController::class);
    Route::resource('/admin/akun', AkunController::class);
    Route::resource('/admin/post', PostController::class);
    Route::resource('/admin/pelamar', PelamarController::class);
    Route::get('/export', [TerimaController::class, 'generate']);
    Route::resource('/admin/terima', TerimaController::class);
    });

    Route::group(['middleware' => ['user-role:hrd']], function(){
        Route::get("/hrd", [HrdController::class, 'index']);
    });

    Route::group(['middleware' => ['user-role:user']], function(){
        Route::get("/user/profile", [UserController::class, 'profile']);
        Route::get("/user/ubahpass", [ChangepassController::class, 'index']);
        Route::post("/user/updatepass", [ChangepassController::class, 'updatepass']);
        Route::get("/user/ubahprofile", [ChangepassController::class, 'ubahprofile']);


        Route::post("/user/updateprofil", [ChangepassController::class, 'aksiupdate']);


        
        Route::get("/user/notif", [UserController::class, 'notif']);
        Route::get("/user/apply/{post:id}", [UserController::class, 'apply']);
        Route::get("/loker/{post:slug}", [UserController::class, 'detail']);
        Route::resource("/user", UserController::class);
    });
});
// //route admin
// Route::middleware(['auth', 'user-role:admin'])->group(function(){
//     Route::get('/admin', [AdminController::class, 'index']);
    // Route::resource('/admin/slider', SliderController::class);
    // Route::resource('/admin/about', TentangController::class);
    // Route::resource('/admin/team', TeamController::class);
    // Route::resource('/admin/jenis', JenisController::class);
    // Route::resource('/admin/service', ServiceController::class);
    // Route::resource('/admin/akun', AkunController::class);
// });

// //route hrd
// Route::middleware(['auth', 'user-role:hrd'])->group(function(){
//     Route::get("/hrd", [HrdController::class, 'index']);
// });

// //route user
// Route::middleware(['auth', 'user-role:user'])->group(function(){
//     // Route::get("/user",[UserController::class, 'index']);
    // Route::get("/user/profile", [UserController::class, 'profile']);
    // Route::get("/user/ubahpass", [ChangepassController::class, 'index']);
    // Route::post("/user/updatepass", [ChangepassController::class, 'updatepass']);
    // Route::get("/user/ubahprofile", [ChangepassController::class, 'ubahprofile']);
    // Route::resource("/user", UserController::class);
  
// });





