<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ConfessionPostController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PetitionPostController;
use App\Http\Controllers\ReplyController;
use App\Models\ConfessionPost;
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

Route::get('/', [ConfessionPostController::class, 'indexAtWelcome'], function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
//Confession Routes
/**Route::get('confessions', [ConfessionPostController::class, 'index'])->name('confessions'); //show all posts
Route::get('confessions/{confessionPost}', [ConfessionPostController::class, 'show']); //show specific post

Route::get('confessions/create/post', [ConfessionPostController::class, 'create']); //leads to create form
Route::post('confessions/create/post', [ConfessionPostController::class, 'store']); //create post
Route::get('confessions/{confessionPost}/edit', [ConfessionPostController::class, 'edit']); //leads to edit page
Route::put('confessions/{confessionPost}/edit', [ConfessionPostController::class, 'update']); //edit post
Route::delete('confessions/{confessionPost}/delete', [ConfessionPostController::class, 'destroy']); //delete post
**/
Route::put('confessions/{confessionPost}/edit', [ConfessionPostController::class, 'update']); //edit post
Route::delete('confessions/{confessionPost}/delete', [ConfessionPostController::class, 'destroy']); //delete post
Route::resource('confessions', ConfessionPostController::class)->parameters([
    'confessions' => 'confessionPost'
]);


//Petition Routes
Route::put('petitions/{petitionPost}/edit', [PetitionPostController::class, 'update']); //edit post
Route::delete('petitions/{petitionPost}/delete', [PetitionPostController::class, 'destroy']); //delete post
Route::resource('petitions', PetitionPostController::class)->parameters([
    'petitions' => 'petitionPost'
]);

//others
Route::get('/logout', [LogoutController::class, 'store']);

//comment
Route::post('confessions/{confessionPost}/comment', [CommentController::class, 'store']);

Route::post('confessions/{confessionPost}/reply', [ReplyController::class, 'store']);