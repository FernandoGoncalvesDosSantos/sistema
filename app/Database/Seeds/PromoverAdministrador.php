<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use RuntimeException;

class PromoverAdministrador extends Seeder
{
    public function run()
    {
        $users = auth()->getProvider();

        $user = $users->findByCredentials([
            'email' => 'fernando.gs.2019@gmail.com',
        ]);

        if ($user === null) {
            throw new RuntimeException('Usuário não encontrado.');
        }

        if (! $user->inGroup('admin')) {
            $user->addGroup('admin');
        }
    }
}