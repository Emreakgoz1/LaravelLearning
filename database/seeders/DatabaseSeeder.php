<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Post::factory(100)->create();



        // $this->call([SayfaSeeder::class]);
        //  \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //   'name' => 'Test User',
        // 'email' => 'test@example.com',
        //]);
    }
}
