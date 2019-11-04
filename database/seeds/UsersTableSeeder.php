<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$Uc7anPCmczx80lXWsiQW7OmyMHooVi4xTsITBHRLTtKPMosQlHv4q',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
