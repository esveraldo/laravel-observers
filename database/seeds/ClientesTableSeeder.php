<?php

use Illuminate\Database\Seeder;
use App\Cliente;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'nome' => 'Adriana',
            'cnpj' => '09.269.161/0001-50',
            'user_id' => 1,
        ]);
        
        Cliente::create([
            'nome' => 'Maria Eduarda',
            'cnpj' => '63.253.373/0001-94',
            'user_id' => 1,
        ]);
        
        Cliente::create([
            'nome' => 'Larissa',
            'cnpj' => '48.516.110/0001-37',
            'user_id' => 1,
        ]);
        
        Cliente::create([
            'nome' => 'Anna Luiza',
            'cnpj' => '61.126.566/0001-59',
            'user_id' => 1,
        ]);
    }
}
