<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'salon_id' => null,
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'is_barber' => false,
            'phone' => '09356390428',
            'nation_code' => '1250652251',
            'is_admin' => true,
            'birthday' => Carbon::create(2002,10,11),
            'vote' => null,
            'address' => 'Iran,Kashan',
            'remember_token' => Str::random(18)
        ]);
        User::factory(30)->create();
    }
}
