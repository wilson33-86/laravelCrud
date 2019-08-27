<?php

use Illuminate\Database\Seeder;
use App\Carro;

class CarroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

    Carro::create(['marca'=>'mazda','modelo'=>'mazda3']);
    
    Carro::create(['marca'=>'toyota','modelo'=>'prado']);

    factory(Carro::class,12)->create();

    }

}
