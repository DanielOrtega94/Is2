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
                'descripcion'=> 'Es la etapa inicial, la de la concepción de la idea de negocio y el desarrollo de producto o servicio. Es sólo el primer paso, en el que el equipo, normalmente muy pequeño, se pone en marcha y da forma a ese primer ‘boceto’. No hay, por tanto, un ‘business plan’ construido y definido al 100%, ni un prototipo con el que aterrizar en el mercado.',
                #'created_at' => new DateTime('now'),
                #'created_at' => new DateTime('now'),
               #'updated_at'=> new DateTime('now'),
           ]);	
             DB::table('etapas')->insert([
                'Nombre' => 'Semilla',
                'descripcion'=> 'Ya hay un producto en el mercado y empieza a haber una masa crítica de clientes que lo están adquiriendo. La compañía empieza a crecer, aunque de una forma aún incipiente. En este momento, es normal que haya un crecimiento en la plantilla para dar respuesta a estos primeros desafíos.',
                #'created_at' => new DateTime('now'),
               #'updated_at'=> new DateTime('now'),
           ]);	
             DB::table('etapas')->insert([
                'Nombre' =>'Temprana',
                'descripcion'=> 'Es el momento de crecer. La startup ya está construida y establecida, con una posición más o menos consolidada en el sector y unos beneficios estables. Los productos y servicios siguen mejorándose y haciéndose más competitivos. Para hacer frente a la dura competencia, en esta fase es importante controlar la estructura de costes. Se trata de ir ganando cuota de mercado.',
                #'created_at' => new DateTime('now'),
               #'created_at' => new DateTime('now'),
               #'updated_at'=> new DateTime('now'),
           ]);	
             DB::table('etapas')->insert([
                'Nombre' =>'Expansión',
                'descripcion'=> 'Llega un momento en el que la empresa debe dar el salto, expandirse a otros mercados y segmentos. Es en esta fase de expansión en la que lo da. Se trata, por tanto, de un momento delicado, pues cada paso ha de estar bien medido y con una estrategia clara. El riesgo ante errores es mayor.',
                #'created_at' => new DateTime('now'),
                #'created_at' => new DateTime('now'),
               #'updated_at'=> new DateTime('now'),
           ]);	
             DB::table('etapas')->insert([
                'Nombre' =>'Internacionalización',
                'descripcion'=> ' Los objetivos de la estrategia internacional se dirigen, principalmente, a conseguir resultados económicos, bien por la vía del incremento de las ventas o por una estrategia de inversión directa que busque la reducción del coste de producción o distribución, aunque el éxito internacional también significa credibilidad ante posibles inversores, imagen de marca y fidelización de clientes en todo el mundo. Pero el camino de la internacionalización está lleno de riesgos y cambios importantes en la estructura de las empresas, por eso la decisión tiene que estar basada en un buen análisis inicial que identifique los motivos para cruzar las fronteras y la elaboración de una acertada estrategia de internacionalización. ',
                #'created_at' => new DateTime('now'),
                #'created_at' => new DateTime('now'),
               #'updated_at'=> new DateTime('now'),
           ]);	
             DB::table('etapas')->insert([
                'Nombre' =>'Retorno/Declive',
                'descripcion'=> 'Tras todo el ‘periplo’ empresarial de la startup llega (o no) el planteamiento de la venta (exit). No sólo hablamos de la adquisición por parte de otra compañía que ve en ella una oportunidad para crecer o mejorar su producto o servicio (en este caso, la compra puede ser por fusión o manteniendo ambas marcas y firmas de una manera independiente en el mercado). También están las OPV (Oferta Pública de Venta), es decir, la entrada a cotizar en bolsa.',
                #'created_at' => new DateTime('now'),
              #  'created_at' => new DateTime('now'),
              # 'updated_at'=> new DateTime('now'),
            
        ]);	
    }
}
