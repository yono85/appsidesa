<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\users;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //run
        $this->addUsers();
    }


    // ADD USERS
    public function addUsers(){
        $add = new users;
        $add->name          =   "admin";
        $add->email         =  "a@g.com";
        $add->password      =   Hash::make("123123");
        $add->save();
    }
}

