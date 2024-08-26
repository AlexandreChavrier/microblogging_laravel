<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::resource("posts", PostController::class);
// Route::get("/posts/create", [PostController::class, 'create']);
// Route::post("/posts", [PostController::class, 'store']);
// Route::get("/posts/{post}", compact("post"));



Route::get('/create_post', [PostController::class, 'create_post'])
->middleware(['auth', 'verified'])->name('create_post');

Route::get('/feed', [PostController::class, 'feed'])
->middleware(['auth', 'verified'])->name('feed');

// Route::get('/show/{id}', [PostController::class, 'show'])
// ->middleware(['auth', 'verified'])->name('show');

Route::post('/create_post', [PostController::class, 'store'])
->middleware(['auth', 'verified'])->name('store');



// Add a route that can load an image from storage based on a parameter
// Route::get('/images/{imageName}', [ImageController::class, 'show'])->name('image.show');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





require __DIR__.'/auth.php';