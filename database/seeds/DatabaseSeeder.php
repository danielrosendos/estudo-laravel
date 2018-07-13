<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('ProdutoTableSeeder');
    }
}

class ProdutoTableSeeder extends Seeder {
    public function run(){
        
        DB::table('produtos')->insert([
            'nome' => 'Geladeira',
            'valor' => 1200.00,
            'descricao' => 'Side by Side',
            'quantidade' => 2,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Fogão',
            'valor' => 950.00,
            'descricao' => 'Painel automático e forno elétrico',
            'quantidade' => 5,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Microondas',
            'valor' => 1520.00,
            'descricao' => 'Manda SMS quando termina de esquentar',
            'quantidade' => 1,
        ]);
    }
}
