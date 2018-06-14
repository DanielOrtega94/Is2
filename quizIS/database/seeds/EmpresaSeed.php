<?php

use Illuminate\Database\Seeder;

class EmpresaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
                
                'Nombre' => 'Colun',
                'user_id' => 1,
                'correo' =>'magia@delsur.cl',
                'direccion' =>'sure',
                'telefono' =>'12345667',
                'rut_juridica' =>'12.123.123-1',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);	
    }
}
