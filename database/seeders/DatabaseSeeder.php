<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {
        $this->call( [
            UserSeeder::class,
            ProfileSeeder::class,
            PostSeeder::class,
            TagSeeder::class,
            PostTagSeeder::class,
        ] );

        $user = User::factory()->create([
             'name' => 'John Doe',
             'email' => 'john@mail.com',
             'email_verified_at' => now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'remember_token' => Str::random(10),
         ]);

        Profile::create([
            'user_id' => $user->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Create some posts for the user
        Post::factory()->count(10)->create([
            'user_id' => $user->id,
        ]);
    }
}
