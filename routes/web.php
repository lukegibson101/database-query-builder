<?php

use App\Http\Controllers\UsersController;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Support\Facades\Schema;

Route::get('/', function () {

//Schema::disableForeignKeyConstraints();
//User::truncate();
//Post::truncate();
//Comment::truncate();

//     has one
//    dd(Comment::find(1)->user->name);

//    has one inverse
//    dd(User::find(1)->comment->message);

//    $user = [
//        'name' => 'Edwin Diaz',
//        'email' => 'Edwin@mail.com',
//        'password' => 'secret123'
//    ];
//
//    $newUser = new User($user);
//
//    $comment = Comment::find(5)->user()->delete($user);



})->name('home');

Route::post('/create/dummy', [UsersController::class, 'created_dummy_users'])->name('users.create.dummy');
Route::delete('/delete/dummy', [UsersController::class, 'delete_dummy_users'])->name('users.delete.dummy');
Route::resource('users', UsersController::class);
