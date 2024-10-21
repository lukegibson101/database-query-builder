<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
//            UserSeeder::class,
//            CommentSeeder::class,
//            PostSeeder::class
        ]);

//        User::factory(10)->has(Post::factory()->count(2)
//            ->has(Comment::factory()
//                ->count(2)))->create();
    }
}
