<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nombre' => 'Rodrigo',
            'email' => 'rodrigo@gmail.com'
        ]);
        User::create([
            'nombre' => 'Annya', 
            'email' => 'anya@gmail.com'
        ]);
        User::create([
            'nombre' => 'Jose', 
            'email' => 'jose@gmail.com'
        ]);
        User::create([
            'nombre' => 'Maria', 
            'email' => 'maria@gmail.com'
        ]);
        User::create([
            'nombre' => 'Carlos', 
            'email' => 'carlos@gmail.com'
        ]);
        User::create([
            'nombre' => 'Lucia', 
            'email' => 'lucia@gmail.com'
        ]);
        User::create([
            'nombre' => 'Pedro', 
            'email' => 'pedro@gmail.com'
        ]);
        User::create([
            'nombre' => 'Sofia', 
            'email' => 'sofia@gmail.com'
        ]);
        User::create([
            'nombre' => 'Miguel', 
            'email' => 'miguel@gmail.com'
        ]);
        User::create([
            'nombre' => 'Elena', 
            'email' => 'elena@gmail.com'
        ]);


    }
}
