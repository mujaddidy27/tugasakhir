<?php

use App\Http\Controllers\HakAksesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PasienPdfController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\JenisPemeriksaanController;
use App\Http\Controllers\PemeriksaanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemPemeriksaanLabController;
use App\Http\Controllers\ItemPemeriksaanRotegenController;
use App\Http\Controllers\PemeriksaanRotgenController;
use App\Models\OrderItem;
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
    return view('Pages.home', ['title' => 'Home']);
});
Route::get('/about', function () {
    return view('Pages.about', ['title' => 'About']);
});
Route::get('/blog', function () {
    return view('Pages.blog', ['title' => 'Blog']);
});
Route::get('/detail-blog', function () {
    return view('Pages.detail', ['title' => 'Detail-Blog']);
});
Route::get('/team', function () {
    return view('Pages.team', ['title' => 'Team']);
});
Route::get('/testimonial', function () {
    return view('Pages.testimonial', ['title' => 'Testimonnial']);
});
Route::get('/appointment', function () {
    return view('Pages.appointment', ['title' => 'Appointment']);
});
Route::get('/search', function () {
    return view('Pages.search', ['title' => 'Search']);
});
Route::get('/contact', function () {
    return view('Pages.contact', ['title' => 'Contact']);
});

Route::get('/home', [HakAksesController::class, 'index'])->middleware(['auth', 'verified'])->name('home');;
Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('pasien', PasienController::class);
    Route::resource('order', OrderController::class);
    Route::get('order/cari/{key}/pasien', [OrderController::class, 'cari_pasien'])->name('order.caripasien');
    Route::resource('pemeriksaan', PemeriksaanController::class);
    Route::resource('pemeriksaanrotgen', PemeriksaanRotgenController::class);

    Route::resource('datajenispemeriksaan', JenisPemeriksaanController::class);
    Route::resource('datamitra', MitraController::class);
    Route::resource('dataorderitem', OrderItem::class);
    Route::resource('usersilab', UserController::class);
});


require __DIR__ . '/auth.php';
