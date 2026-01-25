<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\{
    HomeController,
    TourController,
    DestinationController,
    ExperienceController,
    BookingController,
    WishlistController,
    PreDepartureController
};

use App\Http\Controllers\Backend\{
    AuthController,
    HomeController as AdminHomeController,
    TourController as AdminTourController,
    GroupTourController,
    AllTourController,
    SuppliersController,
    FAQController,
    BlogController,
    ExperiencesController,
    ReviewController
};

Route::get('/', function () {
    return view('welcome');
});

/* HOME */
Route::get('/', [HomeController::class, 'index'])->name('home');

/* PRE DEPARTURE */
Route::get('/pre-departure', [PreDepartureController::class, 'index'])->name('home');

/* TOURS */
Route::get('/tours', [TourController::class, 'index'])->name('tours.index');
Route::get('/tours/{slug}', [TourController::class, 'show'])->name('tours.show');

/* DESTINATION */
Route::get('/destinations/{slug}', [DestinationController::class, 'show'])
    ->name('destinations.show');

/* EXPERIENCE */
Route::get('/experiences/{slug}', [ExperienceController::class, 'show'])
    ->name('experiences.show');

/* SEARCH */
Route::get('/search', [TourController::class, 'search'])->name('tours.search');

/* BOOKING */
Route::get('/booking/{tour}', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking/submit', [BookingController::class, 'store'])->name('booking.store');

/* WISHLIST */
Route::middleware('auth')->group(function () {
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
    Route::post('/wishlist/add/{tour}', [WishlistController::class, 'add'])->name('wishlist.add');
    Route::delete('/wishlist/remove/{tour}', [WishlistController::class, 'remove'])->name('wishlist.remove');
});


// Backend
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [AuthController::class, 'login']);

    Route::get('/home', [AllTourController::class, 'index']);
    Route::get('/tours/create', [AdminTourController::class, 'create']);

    Route::group(['prefix' => 'group-tours'], function () {
        Route::get('/index', [GroupTourController::class, 'index']);
        Route::get('/create', [GroupTourController::class, 'create']);
    });

    Route::group(['prefix' => 'all-tours'], function () {
        Route::get('/index', [AllTourController::class, 'index']);
        Route::get('/create', [AllTourController::class, 'create']);
    });
});

