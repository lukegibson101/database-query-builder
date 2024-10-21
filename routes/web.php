<?php

use App\Http\Controllers\UsersController;
use App\Models\Comment;
use App\Models\Role;
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

//dd(User::find(1)->posts);
//dd(Post::find(1)->user);

//    $post = new Post([
//        'title' => 'hello',
//        'body' => 'my body'
//    ]);
//    User::find(1)->posts()->save($post);

//    dd(User::find(1)->posts()->whereId('id', '>=', 7)->delete());

//Comment::find(1)->post()->associate(Post::find(4))->save();

//    $post = Comment::find(1)->post;
//    $post->title = "NEW TITLE";
//    $post->body = "NEW BODY";
//    $post->save();

//    $post = Post::find(12);
//    $post->title = "UPDATED FROM THE PUSH SHOW";
//    $post->comments[0] = "UPDATED FROM THE PUSH POST";
//    $post->user->name = "PUSH SHOW TIME CREATED";
//    $post->push();

//    Post::find(4)->user()->delete();

////    dd(User::find(1)->postComment->message);
//    dd(User::find(1)->postComment[0]->message);

//    $comment = [
//        'message' => 'This is a comment message',
//    ];
//    User::find(1)->postComment()->save($comment);

    $comment = ['post_id' => 12, 'message' => "NEW COMMENT NEWSSSSS"];

//$comment = User::find(1)->postComment()->latest()->first();
//$comment->message = 'MAN LARAVEL IS AWESOME';
//
//$comment->save();

//    $data = User::find(1)->postComment[0]->post->user->posts->each(function($post){
//        return $post->id === 12 ? $post->delete() : $post->refresh();
//    });
//
//    dd($data);

//$comment = ['message' => "CRAZT STUFF " . fake()->sentence];
////    User::find(1)->postComments()->create($comment);
//    dd(User::find(1)->postComments()->first()->update($comment));
//

    $user = User::find(3);
//    $user->roles()->attach(1);
//    $user->roles()->sync([1]);

//    $user->roles()->create(['name' => 'teacher']);

//    $role = new Role(['name' => 'student']);

//    $user->roles()->save($role);

//    $user->roles()->toggle(1);

////    Role::destroy([3,4]);
//$comment = new Comment(['message' => "A NEW COMMENT"]);
//dd(Post::find(4)->comments()->save($comment));

    return response(200);

})->name('home');

Route::post('/create/dummy', [UsersController::class, 'created_dummy_users'])->name('users.create.dummy');
Route::delete('/delete/dummy', [UsersController::class, 'delete_dummy_users'])->name('users.delete.dummy');
Route::resource('users', UsersController::class);
