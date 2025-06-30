<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\CarouselSlideController;
use App\Http\Controllers\Admin\FlowerStoryController;
use App\Http\Controllers\Admin\CountryContentSectionController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ContactController;

use App\Models\FlowerStory;
use App\Mail\CustomMessageMail;
use Illuminate\Http\Request;

// routes/web.php
Route::get('/test-email', function() {
    Mail::send([], [], function($message) {
        $message->to('fanclubteam01@gmail.com')
                ->subject('Brevo Test')
                ->html('<h1>This works!</h1>');
    });
    return "Email sent!";
});
// =======================
// Admin Login Routes
// =======================
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('login.submit');
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        // ✅ Flower Stories Routes
        Route::prefix('flower-stories')->name('flower-stories.')->group(function () {
            Route::get('/', [FlowerStoryController::class, 'index'])->name('index');
            Route::get('/create', [FlowerStoryController::class, 'create'])->name('create');
            Route::post('/', [FlowerStoryController::class, 'store'])->name('store');
            Route::get('{flowerStory}/edit', [FlowerStoryController::class, 'edit'])->name('edit');
            Route::put('{flowerStory}', [FlowerStoryController::class, 'update'])->name('update');
            Route::delete('{flowerStory}', [FlowerStoryController::class, 'destroy'])->name('destroy');
        });

        // ✅ Country Content Section Routes
        Route::prefix('country-sections')->name('country-sections.')->group(function () {
            Route::get('/', [CountryContentSectionController::class, 'index'])->name('index');
            Route::get('/create', [CountryContentSectionController::class, 'create'])->name('create');
            Route::post('/', [CountryContentSectionController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [CountryContentSectionController::class, 'edit'])->name('edit');
            Route::put('/{id}', [CountryContentSectionController::class, 'update'])->name('update');
            Route::delete('/{id}', [CountryContentSectionController::class, 'destroy'])->name('destroy');
        });
    });
});


// =======================
// Public Frontend Routes
// =======================

// 👋 Homepage with country intro
Route::get('/', [CountryController::class, 'intro'])->name('front.intro');

// ✅ Dynamic Detail Page View — safer & DRY
Route::get('/detail/{slug}', function ($slug) {
    $allowedPages = ['walnut', 'dance', 'museum', 'krorma', 'visit','cashewnut',];
    if (in_array($slug, $allowedPages)) {
        return view('front.' . $slug);
    }
    abort(404);
})->name('country.detail');

// ✅ Legacy detail page fallback (optional: can be removed if using above)
Route::get('/walnut', fn() => view('front.walnut'));
Route::get('/dance', fn() => view('front.dance'));
Route::get('/museum', fn() => view('front.museum'));
Route::get('/krorma', fn() => view('front.krorma'));
Route::get('/visit', fn() => view('front.visit'));
Route::get('/cashewnut', fn() => view('front.cashewnut'));
Route::get('/sewing', fn() => view('front.sewing'));
Route::get('/campaing', fn() => view('front.campaing'));


Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');


// ✅ Foyer Page
Route::get('/foyer', fn() => view('front.foyer'))->name('foyer');

// ✅ Country Page by Slug
Route::get('/{slug}', [CountryController::class, 'show'])->name('country.show');

// ✅ Flower Detail Page
Route::get('/flower-stories/{slug}', function ($slug) {
    $flowerStory = FlowerStory::where('slug', $slug)->firstOrFail();
    return view('flower-detail', compact('flowerStory'));
})->name('flower-detail');
