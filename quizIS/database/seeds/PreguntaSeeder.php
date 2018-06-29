<?php

use Illuminate\Database\Seeder;

use App\Question;
class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('questions')->insert([
                
                'topic_id' => 1,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene Modelo de negocio?',
                 'answer_explanation' =>'ideas sobre modelo negocio',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);	

       DB::table('questions')->insert([

                'topic_id' => 2,
                'etapa_id' => 1,
                'question_text' =>'Describa sus segmento de clientes',
                 'answer_explanation' =>'ideas sobre modelo negocio',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);	

        DB::table('questions')->insert([
                
                'topic_id' => 1,
                'etapa_id' => 1,
                'question_text' =>'¿Ha identificado productos/servicios sustitutos a su producto/servicio en el mercado?',
                 'answer_explanation' =>'Descripción los principales aspectos de su idea de negocio, proyecto y estrategia o modelo de negocios.',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);

        DB::table('questions')->insert([
                
                'topic_id' => 1,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene presentación descritiva de la idea de negocios?',
                 'answer_explanation' =>'',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);

        DB::table('questions')->insert([
                
                'topic_id' => 1,
                'etapa_id' => 1,
                'question_text' =>'¿Ha identificado, seleccionado o desechado segmentos de clientes en relacion a las propuestas de valor?',
                 'answer_explanation' =>'Definición de los grupos de clientes que tu negocio ataca',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);

               DB::table('questions')->insert([
                
                'topic_id' => 1,
                'etapa_id' => 1,
                'question_text' =>'¿Ha caracterizado (tamaño, atributos valorados, ubicación) los segmentos de clientes?',
                 'answer_explanation' =>'Caracterización o atributos de los segmentos de cliente de la compañía',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);

              DB::table('questions')->insert([
                
                'topic_id' => 1,
                'etapa_id' => 1,
                'question_text' =>'¿Existe un desarrollo de canales de distribucion para la generacion de consiencia, evaluacion, compra, postventa y feedback de la venta?',
                 'answer_explanation' =>'Objetivo de cada canal de distribución indicado',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 1,
                'etapa_id' => 1,
                'question_text' =>'¿Usted posee socios comerciales tales como: proveedores de servicios claves (servicios de apoyo, finanza y capital, insumos y materia prima, alianzas y canal)?',
                 'answer_explanation' =>'Listado de socios comerciales',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 1,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene un objetivo para cada socio comercial?',
                 'answer_explanation' =>'Objetivo de cada socio comercial',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 1,
                'etapa_id' => 1,
                'question_text' =>'',
                 'answer_explanation' =>'',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);

    }
}
