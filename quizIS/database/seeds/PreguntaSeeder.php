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
                
                'topic_id' => 3,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene Modelo de negocio?',
                 'answer_explanation' =>'ideas sobre modelo negocio',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);	

    }
}
