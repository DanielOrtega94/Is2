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
                'ponderation' =>10,
                'question_text' =>'¿Tiene Modelo de negocio?',
                 'answer_explanation' =>'ideas sobre modelo negocio',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);	

        DB::table('questions')->insert([
                
                'topic_id' => 1,
                'etapa_id' => 1,
                'ponderation' =>20,
                'question_text' =>'¿Ha identificado productos/servicios sustitutos a su producto/servicio en el mercado?',
                 'answer_explanation' =>'Descripción los principales aspectos de su idea de negocio, proyecto y estrategia o modelo de negocios.',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);

        DB::table('questions')->insert([
                
                'topic_id' => 1,
                'etapa_id' => 1,
                'ponderation' =>30,
                'question_text' =>'¿Tiene presentación descritiva de la idea de negocios?',
                 'answer_explanation' =>'',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);

        DB::table('questions')->insert([
                
                'topic_id' => 1,
                'etapa_id' => 1,
                'ponderation' =>40,
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
                 'puntaje' => 2,
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
                 'puntaje' => 2,
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
                 'puntaje' => 2,
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
                 'puntaje' => 2,
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
                 'puntaje' => 2,
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
                 'puntaje' => 2,
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
                 'puntaje' => 2,
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
                 'puntaje' => 2,
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
                 'puntaje' => 2,
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
                 'puntaje' => 2,
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
                 'puntaje' => 2,
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
                 'puntaje' => 2,
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
               DB::table('questions')->insert([
                
                'topic_id' => 2,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene Mision y vision?',
                 'answer_explanation' =>'',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
               DB::table('questions')->insert([
                
                'topic_id' => 2,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene Analisis FODA?',
                 'answer_explanation' =>'',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
               DB::table('questions')->insert([
                
                'topic_id' => 2,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene Definicion de objetivos y metas?',
                 'answer_explanation' =>'',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
               DB::table('questions')->insert([
                
                'topic_id' => 2,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene Identificacion de proveedores y clientes?',
                 'answer_explanation' =>'',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
               DB::table('questions')->insert([
                
                'topic_id' => 2,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene Organigrama actualizado?',
                 'answer_explanation' =>'',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
               DB::table('questions')->insert([
                
                'topic_id' => 2,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene Descripciones de cargo asociadas a responsables y recursos de la Compañía?',
                 'answer_explanation' =>'',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
               DB::table('questions')->insert([
                
                'topic_id' => 2,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene CV’s de recursos?',
                 'answer_explanation' =>'',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
               DB::table('questions')->insert([
                
                'topic_id' => 2,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene Evaluaciones de desempeño?',
                 'answer_explanation' =>'',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
               DB::table('questions')->insert([
                
                'topic_id' => 2,
                'etapa_id' => 1,
                'question_text' =>'¿Conoce usted cuantificado la capacidad de producccion/prestacion de productos o servicios?',
                 'answer_explanation' =>'Descripción de la capacidad operativa de la Compañía ',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
               DB::table('questions')->insert([
                
                'topic_id' => 2,
                'etapa_id' => 1,
                'question_text' =>'¿Ha enlistado los factores criticos que posee su operación?',
                 'answer_explanation' =>'Factores críticios para la operación',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
               DB::table('questions')->insert([
                
                'topic_id' => 2,
                'etapa_id' => 1,
                'question_text' =>'¿Su producto/servicio posee una ventaja competitiva con respecto a su competencia?',
                 'answer_explanation' =>'Ventaja competitiva del producto/servicio',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
               DB::table('questions')->insert([
                
                'topic_id' => 2,
                'etapa_id' => 1,
                'question_text' =>'¿Ha identificado los principales actores del mercado en que se encuentra a nivel regional o nacional?',
                 'answer_explanation' =>'Principales actores del mercado a nivel regional/nacional, según participación.',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
               DB::table('questions_options')->insert([
                
                'question_id' => 22,
                'option' => 'Un elemento',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 22,
                'option' => 'Dos elemento',
                 'puntaje' => 3,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 22,
                'option' => 'Tres elemento',
                 'puntaje' => 4,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 22,
                'option' => 'Cuatro elementos',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 23,
                'option' => 'Un elemento',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 23,
                'option' => 'Dos elemento',
                 'puntaje' => 3,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 23,
                'option' => 'Tres elemento',
                 'puntaje' => 4,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 23,
                'option' => 'Cuatro elementos',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 24,
                'option' => 'Un elemento',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 24,
                'option' => 'Dos elemento',
                 'puntaje' => 3,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 24,
                'option' => 'Tres elemento',
                 'puntaje' => 4,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 24,
                'option' => 'Cuatro elementos',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 25,
                'option' => 'Un elemento',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 25,
                'option' => 'Dos elemento',
                 'puntaje' => 3,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 25,
                'option' => 'Tres elemento',
                 'puntaje' => 4,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 25,
                'option' => 'Cuatro elementos',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 26,
                'option' => 'No',
                 'puntaje' => 1,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 26,
                'option' => 'Si, pero no actualizado dentro de los ultimos 6 meses',
                 'puntaje' => 3,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 26,
                'option' => 'Si, actualizado dentro de los ultimos 6 meses',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 27,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 27,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 28,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 28,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 29,
                'option' => 'Si y formal',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 29,
                'option' => 'Si, pero informal',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 29,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 30,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 30,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 31,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 31,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 32,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 32,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 33,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 33,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 3,
                'etapa_id' => 1,
                'question_text' =>'¿Ha realizado planificacion de gastos destinados para Marketing y Ventas?',
                 'answer_explanation' =>'Presupuesto para MKT y Promoción',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 3,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene un plan de Marketing elaborado?',
                 'answer_explanation' =>'Plan de MKT y Promoción',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 3,
                'etapa_id' => 1,
                'question_text' =>'¿Posee un portafolio de productos/servicios ?',
                 'answer_explanation' =>'Portafolio de productos y servicios',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 3,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene control de la facturacion total en los ultimos 6 meses?',
                 'answer_explanation' =>'Facturación total',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 3,
                'etapa_id' => 1,
                'question_text' =>'¿Las ventas poseen un crecimiento en los ultimos 6 meses?',
                 'answer_explanation' =>'Crecimiento de ventas / facturación',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 3,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene control de la facturacion por producto en los ultimos 6 meses?',
                 'answer_explanation' =>'Facturación por producto / servicio',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 3,
                'etapa_id' => 1,
                'question_text' =>'¿Ha identificado clientes en los ultimos 2 meses?',
                 'answer_explanation' =>'Nuevos clientes',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 3,
                'etapa_id' => 1,
                'question_text' =>'¿Ha elaborado su estrategia comercial para el presente año?',
                 'answer_explanation' =>'Estrategia Comercial',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 3,
                'etapa_id' => 1,
                'question_text' =>'¿Ha elaborado su plan comercial para el presente año?',
                 'answer_explanation' =>'Plan Comercial',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 3,
                'etapa_id' => 1,
                'question_text' =>'¿Ha asignado metas comerciales para el presente año?',
                 'answer_explanation' =>'Metas comerciales',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 3,
                'etapa_id' => 1,
                'question_text' =>'¿Ha desarrollado actividades para el cumplimiento de metas ?',
                 'answer_explanation' =>'Descripción de las principales actividades de gestión comercial de la compañía',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 3,
                'etapa_id' => 1,
                'question_text' =>'¿Lleva un seguimiento y control sobre la distribucion de las ventas geograficamente?',
                 'answer_explanation' =>'Distribución geográfica de las ventas',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 3,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene identificado sus canales de distribucion y asociados a estos qué productos  y Servicios?',
                 'answer_explanation' =>'Canales de distribución',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 3,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene registro de ventas por canal de distribucion?',
                 'answer_explanation' =>'Ventas por canal de distribución',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 3,
                'etapa_id' => 1,
                'question_text' =>'¿Ha desarrollado un plan de incentivos para la venta en sus canales de distribución?',
                 'answer_explanation' =>'Programa de incentivo a la venta en canales o alianzas',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 3,
                'etapa_id' => 1,
                'question_text' =>'¿Ha identificado y enlistado los principales competidores de la compañía?',
                 'answer_explanation' =>'Listado de competidores',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 3,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene identificados y clasificados los distribuidores de su producto?',
                 'answer_explanation' =>'Listado de distribuidores',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 3,
                'etapa_id' => 1,
                'question_text' =>'¿Ha considerado todas las regulaciones necesarias para la comercializacion de su producto/servicio?',
                 'answer_explanation' =>'Otra regulaciones y restricciones para el mercado local',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 34,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 34,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 35,
                'option' => 'Si tengo un plan de Marketing para el año actual',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 35,
                'option' => 'Si lo he realizado, pero hace mas de un año',
                 'puntaje' => 3,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 35,
                'option' => 'No',
                 'puntaje' => 1,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 36,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 36,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 37,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 37,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 38,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 38,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 39,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 39,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 40,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 40,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 41,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 41,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 42,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 42,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 43,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 43,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 44,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 44,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 45,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 45,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 46,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 46,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 47,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 47,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 48,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 48,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 49,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 49,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 50,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 50,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 51,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 51,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 5,
                'etapa_id' => 1,
                'question_text' =>'¿Cree que su producto o servicio es una innovacion radical o incremental en su mercado objetivo ?',
                 'answer_explanation' =>'Proceso',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 52,
                'option' => 'No',
                 'puntaje' => 1,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 52,
                'option' => 'Incremental',
                 'puntaje' => 3,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 52,
                'option' => 'Radical',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 4,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene Evaluacion de proyecto (Flujo de caja)?',
                 'answer_explanation' =>'',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 4,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene Capex (años a 0) Inversion?',
                 'answer_explanation' =>'',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 4,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene Capex + Opex  (Año 0 + primer año operación)?',
                 'answer_explanation' =>'',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 4,
                'etapa_id' => 1,
                'question_text' =>'¿Posee Documentacion de los supuestos de evaluacion?',
                 'answer_explanation' =>'',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions')->insert([
                
                'topic_id' => 4,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene Reporte de Capital de Trabajo K?',
                 'answer_explanation' =>'',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
               DB::table('questions')->insert([
                
                'topic_id' => 4,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene Estados financieros (Desde inicio actividad comercial)?',
                 'answer_explanation' =>'',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
               DB::table('questions')->insert([
                
                'topic_id' => 4,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene Cuentas por Cobrar (Desde inicio actividad comercial)?',
                 'answer_explanation' =>'',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
               DB::table('questions')->insert([
                
                'topic_id' => 4,
                'etapa_id' => 1,
                'question_text' =>'¿Tiene Cuentas por Pagar (Desde inicio actividad comercial)?',
                 'answer_explanation' =>'',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
               DB::table('questions')->insert([
                
                'topic_id' => 4,
                'etapa_id' => 1,
                'question_text' =>'¿Posee Libros de compra y ventas (Desde inicio actividad comercial)?',
                 'answer_explanation' =>'',
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
               DB::table('questions_options')->insert([
                
                'question_id' => 53,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 53,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 54,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 54,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 55,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 55,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 56,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 56,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 57,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 57,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 58,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 58,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 59,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 59,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 60,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 60,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 61,
                'option' => 'Si',
                 'puntaje' => 5,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);
              DB::table('questions_options')->insert([
                
                'question_id' => 61,
                'option' => 'No',
                 'puntaje' => 2,
                 'correct' => 0,
                'created_at' => new DateTime('now'),
               'updated_at'=> new DateTime,
           ]);


    }
}
