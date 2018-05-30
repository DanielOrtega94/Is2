<?php

use Illuminate\Database\Seeder;

class EtapasSeed extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	
        	DB::table('etapas')->insert([
                'Nombre' =>'Idea',
                #'created_at' => new DateTime('now'),
               #'updated_at'=> new DateTime('now'),
           ]);	
             DB::table('etapas')->insert([
                'Nombre' => 'Semilla',
                #'created_at' => new DateTime('now'),
               #'updated_at'=> new DateTime('now'),
           ]);	
             DB::table('etapas')->insert([
                'Nombre' =>'Etapa Temprana',
               #'created_at' => new DateTime('now'),
               #'updated_at'=> new DateTime('now'),
           ]);	
             DB::table('etapas')->insert([
                'Nombre' =>'Expansión',
                #'created_at' => new DateTime('now'),
               #'updated_at'=> new DateTime('now'),
           ]);	
             DB::table('etapas')->insert([
                'Nombre' =>'Internalización',
                #'created_at' => new DateTime('now'),
               #'updated_at'=> new DateTime('now'),
           ]);	
             DB::table('etapas')->insert([
                'Nombre' =>'Retorno/Declive',
              #  'created_at' => new DateTime('now'),
              # 'updated_at'=> new DateTime('now'),
            
        ]);	
    }
}
