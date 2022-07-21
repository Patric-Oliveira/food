<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userModel = new \App\Models\UserModel;

        $user = [

            'name'  => 'Patric Oliveira',
            'email' => 'admin@admin.com',
            'cpf'   => '147.015.870-10',
            'phone' => '77 - 9980-47476'
        ];

        $userModel->protect(false)->insert($user);

        $user = [

            'name'  => 'Fulano de Tal',
            'email' => 'fulano@email.com',
            'cpf'   => '931.571.740-61',
            'phone' => '77 - 9999-9999'
        ];

        $userModel->protect(false)->insert($user);

        dd($userModel->errors());
    }
}
