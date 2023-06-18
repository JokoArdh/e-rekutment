<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = new User();
        $user->name = "Administrator";
        $user->gender = "laki-laki";
        $user->email = "ardicurl65@gmail.com";
        $user->password = bcrypt('admin123');
        $user->photo = '1.jpg';
        $user->role = 'admin';
        $user->save();

        $user = new User();
        $user->name = "Human Resource";
        $user->gender = "laki-laki";
        $user->email = "hrd@gmail.com";
        $user->password = bcrypt('hrd123');
        $user->photo = '1.jpg';
        $user->role = 'hrd';
        $user->save();
    }
}
