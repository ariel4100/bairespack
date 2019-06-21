<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('Contents')->delete();
        DB::table('Contents')->insert([
            'section' => 'home',
            'type' => 'texto',
            'text' => '{"image": "uploads/home/img/BXvUstXsIicezkNXagT7aKgzNib8ej7xvteBCELg.png", "footer": null, "header": null, "favicon": null, "text_en": null, "text_es": "<h3><span style=\"color:#000000\">Proyectos adecuados a los</span></h3>\r\n\r\n<h3><span style=\"color:#000000\">requerimientos de nuestros clientes</span></h3>", "title_en": null, "title_es": "Máxima calidad, garantía y confiabilidad"}',
            'order' => NULL,
        ]);
        DB::table('Contents')->insert([
            'section' => 'nosotros',
            'type' => 'texto',
            'text' => '{"ficha": {}, "image": null, "footer": null, "header": null, "favicon": null, "text_en": null, "text_es": "<p>Baires Pack es una empresa dedicada a la fabricaci&oacute;n de equipos para embalaje en pel&iacute;culas termocontra&iacute;bles. La empresa cuenta con la distribuci&oacute;n de productos de la firma Sealed Air Argentina S.A. para la comercializaci&oacute;n de su material Cryovac. Contamos con un gran porcentaje del mercado de media producci&oacute;n en Argentina, manteniendo una imagen institucional de m&aacute;xima seriedad, garant&iacute;a y confiabilidad. Asimismo, todo cliente cuenta con un servicio de mantenimiento y asistencia t&eacute;cnica constante provisto por nuestra red de distribuidores. Nuestro departamento de asistencia t&eacute;cnica est&aacute; integrado por un equipo humano especializado para brindar el servicio que una empresa moderna necesita, con rapidez y eficiencia. Todos los que integramos Baires Pack estamos totalmente identificados con el concepto de calidad y servicio, y a eso le agregamos el respeto que sentimos hacia nuestros clientes.</p>", "title_en": null, "title_es": "NUESTRA HISTORIA", "mision_en": null, "mision_es": "misión", "valores_en": null, "valores_es": "valores", "misiontext_en": null, "misiontext_es": "<p>Integrada por j&oacute;venes Ingenieros y t&eacute;cnicos que est&aacute;n al tanto de las necesidades en el heterog&eacute;neo mundo del packaging, Baires Pack trabaja constantemente para evolucionar a la misma velocidad que el mundo de hoy d&iacute;a.</p>", "valorestext_en": null, "valorestext_es": "<p>Baires Pack es consciente de que cada empresa tiene distintas necesidades. De este modo, resulta indispensable el di&aacute;logo y la participaci&oacute;n del cliente en el desarrollo de sus requerimientos. Esta caracter&iacute;stica se ha convertido en nuestro desaf&iacute;o personal.</p>"}',
            'order' => NULL,
        ]);
        DB::table('Contents')->insert([
            'section' => 'logos',
            'type' => 'texto',
            'text' => '{"image": null, "footer": "uploads/logos/img/7lGh6BqTH5aSEVxXlCoUZut6jaNh20rSQp4wpAZY.png", "header": "uploads/logos/img/sEU2dFvhGrTBH7Lq2VUZtlCT3RMKMyy3ezDtVFgY.png", "favicon": "uploads/logos/img/Yne8cbOMHSv3XNPbTzH5qQIy3NeGkztMYcCcNI4g.png"}',
            'order' => NULL,
        ]);
        DB::table('Contents')->insert([
            'section' => 'venta',
            'type' => 'texto',
            'text' => '{"image": null, "footer": null, "header": null, "favicon": null, "text_en": null, "text_es": "<p>Ofrecemos a nuestros clientes un servicio de mantenimiento y asistencia t&eacute;cnica constante provisto por nuestra red de distribuidores. Nuestro departamento de asistencia t&eacute;cnica est&aacute; integrado por un equipo humano especializado para brindar el servicio que una empresa moderna necesita, con rapidez y eficiencia. Todos los que integramos Baires Pack estamos totalmente identificados con el concepto de calidad y servicio, y a eso le agregamos el respeto que sentimos hacia nuestros clientes.</p>", "title_en": null, "title_es": "POST-VENTA", "subtext_en": null, "subtext_es": "<h2><span style=\"color:#ffb800\">Servicio de asistencia t&eacute;cnica y</span></h2>\r\n\r\n<h2><span style=\"color:#ffb800\">garant&iacute;a de nuestros productos</span></h2>"}',
            'order' => NULL,
        ]);

    }
}