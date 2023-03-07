<?php

use App\Models\Category;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\SantriController;
use GuzzleHttp\Middleware;
use Illuminate\Routing\Controllers\Middleware as ControllersMiddleware;

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
    return view('home', [
        'title' => 'Pondok Pesantren Ibnu Taimiyah, Bogor',
        'active' => 'posts',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about',
        'name' => 'Kunjungi website :',
        'email' => 'https://ibnutaimiyah.sch.id/',
        'image' => 'img/PIT.png',
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']); // halaman single post

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::get('dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

// Route::get('/dashboard/rekapsantri', function () {
//     return view('dashboard.santris.rekapsantri.index', [
//         // 'title' => 'Pondok Pesantren Ibnu Taimiyah, Bogor',
//         // 'active' => 'posts',
//     ]);
// });

// Route::resource('/dashboard/santris', SantriController::class)->middleware('admin');
Route::get('/dashboard/rekapsantri', [SantriController::class, 'rekapsantri'])->Middleware('auth');
Route::get('/dashboard/santrima', [SantriController::class, 'santrima'])->Middleware('auth');
Route::get('/dashboard/santrimts', [SantriController::class, 'santrimts'])->middleware('auth');
Route::get('/dashboard/santrimi', [SantriController::class, 'santrimi'])->middleware('auth');
Route::get('/dashboard/santrira', [SantriController::class, 'santrira'])->middleware('auth');
Route::get('/dashboard/santriyatim', [SantriController::class, 'santriyatim'])->middleware('auth');
Route::get('/dashboard/santriasrama', [SantriController::class, 'santriasrama'])->middleware('auth');
Route::get('/dashboard/santriagk', [SantriController::class, 'santriagk'])->middleware('auth');
Route::get('/dashboard/santris', [SantriController::class, 'index'])->middleware('auth');
// Route::get('/santris/create', [SantriController::class, 'create']);
// Route::post('/santris', [SantriController::class, 'store']);
// Route::get('/santris/{santri}', [SantriController::class, 'show']);
// Route::get('/santris/{santri}/edit', [SantriController::class, 'edit']);
// Route::put('/santris/{santri}', [SantriController::class, 'update']);
// Route::delete('/santris/{santri}', [SantriController::class, 'destroy']);
