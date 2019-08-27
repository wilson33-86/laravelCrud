<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
         $this->truncateTables(['professions','users','carros']);

        $this->call(ProfessionSeeder::class);
        $this->call(UserSeed::class);
        $this->call(CarroSeeder::class);


     }
       public function truncateTables(array $tables){

           DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas

           foreach ($tables as $table) {
               DB::table($table)->truncate();
           }

             DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas


       
      
        
    }

    
}
