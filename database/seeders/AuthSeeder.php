<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Hash;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new User();
        $data->name ='Admin';
        $data->email ='prakhar.admin@prakharsoftwares.com';
        $data->password = Hash::make('Prakhar#2024');
        $data->save();
    }
}
