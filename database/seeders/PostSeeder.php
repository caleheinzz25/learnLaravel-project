<?php

namespace Database\Seeders;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use userIlluminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run($user): void
    {
        // $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::factory(5)->create(),
            $user,
            User::factory(5)->create(),
        ])->create();
    }
}
