<?php

use Illuminate\Database\Seeder;

class ContentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Contents')->delete();
        
        \DB::table('Contents')->insert(array (
            0 => 
            array (
                'id' => 1,
                'section' => 'home',
                'type' => 'texto',
                'text' => '{"image": "uploads/home/img/BXvUstXsIicezkNXagT7aKgzNib8ej7xvteBCELg.png", "footer": null, "header": null, "favicon": null, "text_en": null, "text_es": "<h3><span style=\\"color:#000000\\">Proyectos adecuados a los</span></h3>\\r\\n\\r\\n<h3><span style=\\"color:#000000\\">requerimientos de nuestros clientes</span></h3>", "title_en": null, "title_es": "Máxima calidad, garantía y confiabilidad"}',
                'image' => NULL,
                'order' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'section' => 'nosotros',
                'type' => 'texto',
                'text' => '{"title_es":"NUESTRA HISTORIA","title_en":"we history","text_es":"<p>Baires Pack es una empresa dedicada a la fabricaci&oacute;n de equipos para embalaje en pel&iacute;culas termocontra&iacute;bles. La empresa cuenta con la distribuci&oacute;n de productos de la firma Sealed Air Argentina S.A. para la comercializaci&oacute;n de su material Cryovac. Contamos con un gran porcentaje del mercado de media producci&oacute;n en Argentina, manteniendo una imagen institucional de m&aacute;xima seriedad, garant&iacute;a y confiabilidad. Asimismo, todo cliente cuenta con un servicio de mantenimiento y asistencia t&eacute;cnica constante provisto por nuestra red de distribuidores. Nuestro departamento de asistencia t&eacute;cnica est&aacute; integrado por un equipo humano especializado para brindar el servicio que una empresa moderna necesita, con rapidez y eficiencia. Todos los que integramos Baires Pack estamos totalmente identificados con el concepto de calidad y servicio, y a eso le agregamos el respeto que sentimos hacia nuestros clientes.<\\/p>","text_en":"<p>con un servicio de mantenimiento y asistencia t&eacute;cnica constante provisto por nuestra red de distribuidores. Nuestro departamento de asistencia t&eacute;cnica est&aacute; integrado por un equipo huma<\\/p>","mision_es":"misi\\u00f3n","mision_en":"misi\\u00f3n en","misiontext_es":"<p>Integrada por j&oacute;venes Ingenieros y t&eacute;cnicos que est&aacute;n al tanto de las necesidades en el heterog&eacute;neo mundo del packaging, Baires Pack trabaja constantemente para evolucionar a la misma velocidad que el mundo de hoy d&iacute;a.<\\/p>","misiontext_en":"<p>Integrada por j&oacute;venes Ingenieros y t&eacute;cnicos que est&aacute;n al tanto de las necesidades en el heterog&eacute;neo mundo del packaging, Baires Pack trabaja constantemente para evolucionar a la misma velocidad que el mundo de hoy d&iacute;a. en<\\/p>","valores_es":"valores","valores_en":"valores en","valorestext_es":"<p>Baires Pack es consciente de que cada empresa tiene distintas necesidades. De este modo, resulta indispensable el di&aacute;logo y la participaci&oacute;n del cliente en el desarrollo de sus requerimientos. Esta caracter&iacute;stica se ha convertido en nuestro desaf&iacute;o personal.<\\/p>","valorestext_en":"<p>Baires Pack es consciente de que cada empresa tiene distintas necesidades. De este modo, resulta indispensable el di&aacute;logo y la participaci&oacute;n del cliente en el desarrollo de sus requerimientos. Esta caracter&iacute;stica se ha convertido en nuestro desaf&iacute;o personal.&nbsp; en<\\/p>","image":"uploads\\/nosotros\\/img\\/CTWcAD0gdZQWQUdmcpxou2fXknZ01nDNk7aut1QE.png","favicon":null,"header":null,"footer":null}',
                'image' => NULL,
                'order' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-06-26 19:27:35',
            ),
            2 => 
            array (
                'id' => 3,
                'section' => 'logos',
                'type' => 'texto',
                'text' => '{"image": null, "footer": "uploads/logos/img/7lGh6BqTH5aSEVxXlCoUZut6jaNh20rSQp4wpAZY.png", "header": "uploads/logos/img/sEU2dFvhGrTBH7Lq2VUZtlCT3RMKMyy3ezDtVFgY.png", "favicon": "uploads/logos/img/Yne8cbOMHSv3XNPbTzH5qQIy3NeGkztMYcCcNI4g.png"}',
                'image' => NULL,
                'order' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'section' => 'venta',
                'type' => 'texto',
                'text' => '{"title_es":"POST-VENTA","title_en":null,"text_es":"<p>Ofrecemos a nuestros clientes un servicio de mantenimiento y asistencia t&eacute;cnica constante provisto por nuestra red de distribuidores. Nuestro departamento de asistencia t&eacute;cnica est&aacute; integrado por un equipo humano especializado para brindar el servicio que una empresa moderna necesita, con rapidez y eficiencia. Todos los que integramos Baires Pack estamos totalmente identificados con el concepto de calidad y servicio, y a eso le agregamos el respeto que sentimos hacia nuestros clientes.<\\/p>","text_en":null,"subtext_es":"<h2><span style=\\"color:#ffb800\\">Servicio de asistencia t&eacute;cnica y<\\/span><\\/h2>\\r\\n\\r\\n<h2><span style=\\"color:#ffb800\\">garant&iacute;a de nuestros productos<\\/span><\\/h2>","subtext_en":null,"featured":"on","gallery":[{"image":"gallery\\/Inpc8vEsGDCf1HCkOQy91QipzToA2a4HnPMeY28B.png","title_es":"Asistencia t\\u00e9cnica","title_en":"Asistencia t\\u00e9cnica en"},{"image":"gallery\\/Izl8rLKLWmDRUIQgBZKcW1qJo6XKPphBCPOD4Q3j.png","title_es":"Servicio de mantenimiento","title_en":"Servicio de mantenimiento en"},{"image":"gallery\\/DlX03eajpLHrgS47o9enH86h8a3uIlG3H1qQk2rI.png","title_es":"Garant\\u00eda de  nuestros equipos","title_en":"Garant\\u00eda de  nuestros equipos  en"},{"image":"gallery\\/oENRROvhGibAI3qri2tiPIlHFNculc71ATcxFz8R.png","title_es":"Valor agregado Baires Pack","title_en":"Valor agregado Baires Pack en"}],"favicon":null,"header":null,"footer":null,"image":null}',
                'image' => '[{"image":"gallery\\/Inpc8vEsGDCf1HCkOQy91QipzToA2a4HnPMeY28B.png","title_es":"Asistencia t\\u00e9cnica","title_en":"Asistencia t\\u00e9cnica en"},{"image":"gallery\\/Izl8rLKLWmDRUIQgBZKcW1qJo6XKPphBCPOD4Q3j.png","title_es":"Servicio de mantenimiento","title_en":"Servicio de mantenimiento en"},{"image":"gallery\\/DlX03eajpLHrgS47o9enH86h8a3uIlG3H1qQk2rI.png","title_es":"Garant\\u00eda de  nuestros equipos","title_en":"Garant\\u00eda de  nuestros equipos  en"},{"image":"gallery\\/oENRROvhGibAI3qri2tiPIlHFNculc71ATcxFz8R.png","title_es":"Valor agregado Baires Pack","title_en":"Valor agregado Baires Pack en"}]',
                'order' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-06-26 19:03:59',
            ),
            4 => 
            array (
                'id' => 5,
                'section' => 'condiciones',
                'type' => 'texto',
                'text' => '{"title_es":"Acepto los t\\u00e9rminos y condiciones de privacidad","title_en":"Acepto los t\\u00e9rminos y condiciones de privacidad en","text_es":"<p>es<\\/p>","text_en":"<p>en<\\/p>","favicon":null,"header":null,"footer":null,"image":null}',
                'image' => NULL,
                'order' => NULL,
                'created_at' => '2019-06-26 14:16:17',
                'updated_at' => '2019-06-26 17:43:21',
            ),
            5 => 
            array (
                'id' => 8,
                'section' => 'contacto',
                'type' => 'texto',
            'text' => '{"title_es":"Contacto","title_en":"Contact","direccion":"G\\u00fciraldes 1838 (calle 45), Villa Maip\\u00fa, San Mart\\u00edn, Buenos Aires, Argentina","telefono_1":"(+54 11) 5031-3543","correo":"contacto@bairespack.com","favicon":null,"header":null,"footer":null,"image":null}',
                'image' => NULL,
                'order' => NULL,
                'created_at' => '2019-06-26 17:29:44',
                'updated_at' => '2019-06-26 18:30:00',
            ),
        ));
        
        
    }
}