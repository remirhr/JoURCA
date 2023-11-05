<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();
        $user = [
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => Hash::make('admin'), // password
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => Str::random(10),
                'profile_photo_path' => null,
                'current_team_id' => null,
                'role' => '1',
            ],
            [
            'name' => 'orga',
                'email' => 'orga@orga.com',
                'email_verified_at' => now(),
                'password' => Hash::make('orga'), // password
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => Str::random(10),
                'profile_photo_path' => null,
                'current_team_id' => null,
                'role' => '2',
                ],[
                'name' => 'podiumeditor',
                    'email' => 'classement@classement.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('classement'), // password
                    'two_factor_secret' => null,
                    'two_factor_recovery_codes' => null,
                    'remember_token' => Str::random(10),
                    'profile_photo_path' => null,
                    'current_team_id' => null,
                    'role' => '3',]
        ];
      User::insert($user);
      
    }
}
