<?php


use \App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       
        Profession::create(['name'=>'administrador BD']);   

        Profession::create(['name'=>'Desarrollador Front-end']);

        Profession::create(['name'=>'Desarrollador Back-end']);   

        factory(Profession::class,17)->create(); 

       
                   

       /* DB::table('professions')->insert([
         'name'=>'Desarrollador Front-end',
    ]);

        DB::table('professions')->insert([
         'name'=>'Desarrollador Back-end',
    ]);
   
    DB::table('professions')->insert(['name'=>'web design',]);

       DB::delete('delete from professions where id=?',['3']);

       DB::insert('insert into professions (name) values(?)',['Desarrolador FullStack']);*/
   /*
    DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        DB::table('professions')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la r
        */
    }
    
}
