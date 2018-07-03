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
                'question_text' =>'¿Cuenta con al menos una entidad con la que complementan propuestas de valor para atender alguna necesidad?',
                 'answer_explanation' =>'Listado de alianzas estratégicas',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 1,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene un objetivo para cada alianza estrategica?',
                 'answer_explanation' =>'Objetivo de cada alianza estratégica',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 1,
                'etapa_id' => 1,
                'question_text' =>'¿Existe para cada propuesta de valor al menos un segmento de clientes asociado a dicha propuesta?',
                 'answer_explanation' =>'Canales para cada relación: Propuesta de Valor - Segmento de Cliente',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 1,
                'etapa_id' => 1,
                'question_text' =>'¿Posee una planificacion de actividades para cada canal?',
                 'answer_explanation' =>'Principales actividades de gestión de cada canal identificado',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 1,
                'etapa_id' => 1,
                'question_text' =>'¿Se ha identificado y determinado una relacion particular para llegar al segmento de clientes a traves de una propuesta de valor especifica?',
                 'answer_explanation' =>'Identifique cada relación con los segmentos de clientes señalados anteriormente',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 1,
                'etapa_id' => 1,
                'question_text' =>'¿Para cada relacion identificada se establece al menos un objetivo para el desarrollo de la relacion cliente - empresa?',
                 'answer_explanation' =>'Tipo u objetivo de cada relación identificad',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 1,
                'etapa_id' => 1,
                'question_text' =>'¿Para cada relacion se establecen actividades para el desarrollo de las relaciones identificada?',
                 'answer_explanation' =>'Principales actividades ascociadas al desarrollo o gestión de cada relación identificada',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 1,
                'etapa_id' => 1,
                'question_text' =>'¿Ha identificado los tipos de ingresos que va a percibir por la comercializacion de sus productos o servicios ?',
                 'answer_explanation' =>'Identifique y cuantifique en $ cada tipo de ingreso de la Compañía',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 1,
                'etapa_id' => 1,
                'question_text' =>'¿Ha identificado  recursos fisicos, economicos, humanos e intelectuales ?',
                 'answer_explanation' =>'¿Cuáles son los recursos clave de la Compñaía?',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 1,
                'etapa_id' => 1,
                'question_text' =>'¿Ha identificado y valorizado los costos pertinentes a la producccion o prestacion de servicios de la compañía?',
                 'answer_explanation' =>'Liste la estructura de costos de la Compañía',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 3,
                'option' => 'Si',
                 'puntaje' => 4,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 3,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
               DB::table('questions_options')->insert([
                
                'question_id' => 6,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 6,
                'option' => 'No',
                 'puntaje' => 0,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 7,
                'option' => 'NO ha identificado segmentos de clientes',
                 'puntaje' => 1,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]); 
              DB::table('questions_options')->insert([
                
                'question_id' => 7,
                'option' => 'Ha identificado segmentos de clientes pero no ha desechado o seleccionado en relacion a las propuestas de valor',
                 'puntaje' => 3,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 7,
                'option' => 'Ha identificado segmentos de clientes y ha desechado o seleccionado en relacion a las propuestas de valor',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 8,
                'option' => 'No ha definido tamaño, atributos ni ubicación de los segmentos de clientes',
                 'puntaje' => 0,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 8,
                'option' => 'Un elemento',
                 'puntaje' => 3,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 8,
                'option' => 'Dos elementos',
                 'puntaje' => 4,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 8,
                'option' => 'Tres elementos',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 5,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 5,
                'option' => 'No',
                 'puntaje' => 0,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 9,
                'option' => 'Un elemento',
                 'puntaje' => 1,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 9,
                'option' => 'Dos elemento',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 9,
                'option' => 'Tres elemento',
                 'puntaje' => 3,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 9,
                'option' => 'Cuatro elementos',
                 'puntaje' => 4,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 9,
                'option' => 'Cinco elementos',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 10,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 10,
                'option' => 'No',
                 'puntaje' => 0,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 11,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 11,
                'option' => 'No',
                 'puntaje' => 0,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 12,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 12,
                'option' => 'No',
                 'puntaje' => 0,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 13,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 13,
                'option' => 'No',
                 'puntaje' => 0,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 14,
                'option' => 'Tiene al menos una propuesta de valor que no tiene asociado un segmento de clientes o existe al menos un segmento de clientes que no se satisface con ninguna propuesta de valor',
                 'puntaje' => 0,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 14,
                'option' => 'Cada segmento de clientes tiene asociado solo una propuesta de valor',
                 'puntaje' => 3,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 14,
                'option' => 'Un segmento de clientes es atendido por mas de una propuesta de valor',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 15,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 15,
                'option' => 'No',
                 'puntaje' => 0,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 16,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 16,
                'option' => 'No',
                 'puntaje' => 0,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 16,
                'option' => 'Incompleta',
                 'puntaje' => 3,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 17,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 17,
                'option' => 'No',
                 'puntaje' => 0,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);DB::table('questions_options')->insert([
                
                'question_id' => 18,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 18,
                'option' => 'No',
                 'puntaje' => 0,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);DB::table('questions_options')->insert([
                
                'question_id' => 19,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 19,
                'option' => 'No',
                 'puntaje' => 0,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 20,
                'option' => 'No tiene',
                 'puntaje' => 0,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 20,
                'option' => 'Un elemento',
                 'puntaje' => 1,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 20,
                'option' => 'Dos elemento',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 20,
                'option' => 'Tres elemento',
                 'puntaje' => 3,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 20,
                'option' => 'Cuatro elementos',
                 'puntaje' => 4,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 21,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 21,
                'option' => 'No',
                 'puntaje' => 0,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 21,
                'option' => 'Solo identificado',
                 'puntaje' => 3,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);

    }
}
