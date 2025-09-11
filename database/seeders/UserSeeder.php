<?php

namespace Database\Seeders;

use App\Models\PasswordResetToken;
use App\Models\Session;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** User $user */
        $user = User::factory()->createOne();

        PasswordResetToken::factory()->createOne([
            'email' => $user->email,
        ]);

        Session::factory()->createOne([
            'user_id' => $user->id,
        ]);
    }
}