<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Miguel Herrera',
            'email' => 'miguellangelhs@gmail.com',
            'username' => 'mahs',
            'password' => bcrypt('12345'),
        ]);

        $user->assignRole('Admin');
    }
}
