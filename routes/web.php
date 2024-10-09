<?php

use App\Http\Controllers\UsersController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
//    CREATING DATA
//    $post = new Post;
//    $post->title = 'My first post';
//    $post->body = 'The is the first body post';
//    $post->save();
//    return "post created";

//    READING DATA
//    dd(Post::find(1));
//    Post::firstWhere('id', 1);
//    dd(User::select('email')->orderBy('id', 'desc')->get());

//    UPDATING DATA
//    $user = User::find(1);
//    $user->name = "Luke Gibson";
//    $user->save();
//    echo $user->name;

    // DELETING DATA
//    User::find(1)->delete();
//    return "User Deleted";





})->name('home');

Route::post('/create/dummy', [UsersController::class, 'created_dummy_users'])->name('users.create.dummy');
Route::delete('/delete/dummy', [UsersController::class, 'delete_dummy_users'])->name('users.delete.dummy');
Route::resource('users', UsersController::class);
