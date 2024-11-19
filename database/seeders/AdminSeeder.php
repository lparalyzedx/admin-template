<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $user =  User::query()->create([
            'name' => 'Reklam Faresi',
            'email' => 'admin@reklamfaresi.com',
            'email_verified_at' => now(),
            'password' => bcrypt('0852ca12321'),
            'remember_token' => Str::random(10),
        ]);

        $user->syncRoles('root');
    }
}
