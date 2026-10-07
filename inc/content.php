<?php
/**
 * Contenido institucional base (tomado del Plan Estratégico de la Fundación Casanare).
 * Se usa para construir los patrones y las páginas iniciales. Después de activar el tema,
 * todo este contenido se edita directamente desde el editor de WordPress.
 *
 * @package fundacion-casanare
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * URL de una imagen incluida en el tema.
 */
function fc_img( $name, $ext = 'webp' ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $name . '.' . $ext ) );
}

/**
 * Líneas estratégicas.
 */
function fc_lineas() {
	return array(
		array(
			'slug'  => 'vivienda',
			'title' => 'Vivienda digna y mejoramiento de las condiciones de habitabilidad',
			'short' => 'Vivienda digna',
			'img'   => 'escuela-vereda',
			'alt'   => 'Escuela y viviendas rurales junto a una cancha en una vereda',
			'resumen' => 'Mejoramiento habitacional para entornos dignos, seguros y accesibles, con prioridad para adultos mayores, madres cabeza de hogar y personas con discapacidad.',
			'general' => 'Contribuir al mejoramiento de las condiciones de vida de personas y familias en situación de vulnerabilidad mediante iniciativas de mejoramiento habitacional que favorezcan entornos dignos, seguros, funcionales y adecuados para el desarrollo integral de sus habitantes, con especial atención a poblaciones que enfrentan mayores condiciones de vulnerabilidad social.',
			'especificos' => array(
				'Identificar hogares y personas en condiciones de vulnerabilidad que presenten necesidades prioritarias de mejoramiento habitacional.',
				'Promover proyectos de adecuación, reparación y mejoramiento de viviendas que contribuyan a generar condiciones más dignas y seguras.',
				'Priorizar intervenciones dirigidas a poblaciones con mayores barreras sociales, incluyendo adultos mayores, madres cabeza de hogar y personas con discapacidad.',
				'Incorporar criterios de accesibilidad en las intervenciones habitacionales destinadas a personas con discapacidad y adultos mayores cuando sus condiciones particulares lo requieran.',
				'Articular recursos provenientes de entidades territoriales, empresas, organizaciones sociales y cooperación para ampliar progresivamente la capacidad de intervención.',
				'Promover la participación de las familias y comunidades en los procesos de identificación, priorización y desarrollo de las soluciones habitacionales.',
			),
		),
		array(
			'slug'  => 'agricultura',
			'title' => 'Agricultura, seguridad alimentaria y desarrollo productivo rural',
			'short' => 'Agricultura y seguridad alimentaria',
			'img'   => 'camino-mulas',
			'alt'   => 'Campesinos con mulas en un camino de vereda',
			'resumen' => 'Iniciativas agrícolas que generan alimentos, fortalecen los medios de vida y crean oportunidades económicas sostenibles.',
			'general' => 'Fortalecer las capacidades productivas y económicas de familias y comunidades mediante iniciativas agrícolas que contribuyan a la generación de alimentos, el fortalecimiento de medios de vida y la creación de oportunidades económicas sostenibles, articulando conocimiento, organización comunitaria y acceso a capacidades técnicas.',
			'especificos' => array(
				'Promover iniciativas agrícolas y productivas adaptadas a las características y capacidades de las comunidades participantes.',
				'Fortalecer conocimientos y capacidades técnicas relacionadas con producción agrícola y gestión de iniciativas productivas.',
				'Promover proyectos que contribuyan simultáneamente a la disponibilidad de alimentos y a la generación de oportunidades económicas para las familias.',
				'Facilitar procesos de formación y asistencia técnica mediante alianzas con SENA, universidades, entidades territoriales, gremios y otros actores especializados.',
				'Fortalecer iniciativas asociativas y comunitarias que permitan mejorar las capacidades de producción y generación de ingresos.',
				'Vincular progresivamente los procesos productivos con oportunidades de emprendimiento y fortalecimiento económico.',
				'Promover prácticas responsables que favorezcan la sostenibilidad de las iniciativas productivas en el territorio.',
			),
		),
		array(
			'slug'  => 'educacion',
			'title' => 'Educación, formación y desarrollo de capacidades',
			'short' => 'Educación y formación',
			'img'   => 'taller',
			'alt'   => 'Taller de formación con mujeres de la comunidad',
			'resumen' => 'Oportunidades educativas y de formación para niños, jóvenes, mujeres, adultos mayores, personas con discapacidad y comunidades indígenas.',
			'general' => 'Promover oportunidades educativas y procesos de formación que fortalezcan las capacidades personales, sociales, técnicas y productivas de niños, niñas, jóvenes, mujeres, adultos mayores, personas con discapacidad y comunidades indígenas, contribuyendo a ampliar sus posibilidades de participación, desarrollo y mejoramiento de la calidad de vida.',
			'especificos' => array(
				'Facilitar oportunidades de educación y formación para poblaciones que enfrentan barreras sociales, económicas o territoriales.',
				'Desarrollar procesos de formación pertinentes frente a las necesidades y potencialidades de las comunidades.',
				'Promover programas dirigidos a niños, niñas y jóvenes que fortalezcan capacidades, habilidades para la vida y construcción de proyectos personales.',
				'Desarrollar talleres y procesos educativos dirigidos a mujeres que contribuyan al fortalecimiento de sus capacidades personales y económicas.',
				'Promover acciones formativas inclusivas que faciliten la participación de personas con discapacidad.',
				'Fortalecer procesos educativos y comunitarios que reconozcan los conocimientos, identidad y patrimonio de las comunidades indígenas.',
				'Construir alianzas con SENA, universidades, entidades territoriales y organizaciones de la sociedad civil para ampliar la oferta y calidad de los procesos educativos.',
			),
		),
		array(
			'slug'  => 'emprendimiento',
			'title' => 'Empoderamiento económico, emprendimiento e inclusión productiva',
			'short' => 'Emprendimiento e inclusión productiva',
			'img'   => 'lideres-parque',
			'alt'   => 'Líderes y miembros de la comunidad reunidos en el parque de un municipio',
			'resumen' => 'Formación, acompañamiento y conexiones para que los emprendimientos productivos y culturales generen ingresos sostenibles.',
			'general' => 'Promover la autonomía económica y el fortalecimiento de los medios de vida de personas y familias en situación de vulnerabilidad mediante el desarrollo de capacidades productivas y empresariales, el impulso de emprendimientos y la articulación con oportunidades económicas que permitan generar ingresos sostenibles y mejorar las condiciones de vida.',
			'especificos' => array(
				'Identificar y fortalecer emprendimientos productivos y culturales desarrollados por personas y comunidades acompañadas por la Fundación.',
				'Desarrollar procesos de formación en emprendimiento, administración, planificación, costos, comercialización y sostenibilidad de iniciativas económicas.',
				'Brindar acompañamiento para fortalecer la organización, productividad y viabilidad de emprendimientos y unidades productivas.',
				'Promover iniciativas económicas que aprovechen capacidades, conocimientos, tradiciones y potencialidades existentes en los territorios.',
				'Facilitar conexiones entre emprendedores, gremios, empresas, instituciones educativas y entidades territoriales.',
				'Promover modelos asociativos y comunitarios que permitan fortalecer capacidades de producción y comercialización.',
				'Favorecer especialmente la participación económica de poblaciones que enfrentan mayores barreras para acceder a oportunidades productivas.',
				'Articular formación, asistencia técnica y gestión de alianzas para que los emprendimientos puedan avanzar progresivamente hacia mayores niveles de sostenibilidad.',
			),
		),
		array(
			'slug'  => 'genero',
			'title' => 'Igualdad de género y empoderamiento de las mujeres',
			'short' => 'Igualdad de género',
			'img'   => 'pendon-comunidad',
			'alt'   => 'Mujeres y hombres de la comunidad reunidos junto al pendón de la Fundación Casanare',
			'resumen' => 'Autonomía, liderazgo y oportunidades para las mujeres, con especial atención a las madres cabeza de hogar.',
			'general' => 'Contribuir a la igualdad de oportunidades y al fortalecimiento de la autonomía de las mujeres, con especial atención a madres cabeza de hogar y mujeres en condiciones de vulnerabilidad, mediante procesos de formación, fortalecimiento de capacidades, participación, emprendimiento y generación de oportunidades para su desarrollo social y económico.',
			'especificos' => array(
				'Desarrollar programas de fortalecimiento personal, social y económico dirigidos a mujeres en situación de vulnerabilidad.',
				'Priorizar acciones que respondan a las necesidades y capacidades de las madres cabeza de hogar.',
				'Promover procesos formativos que fortalezcan conocimientos, habilidades, liderazgo, participación y autonomía.',
				'Impulsar emprendimientos y actividades productivas lideradas por mujeres que puedan convertirse en fuentes sostenibles de generación de ingresos.',
				'Promover la participación de las mujeres en espacios comunitarios, productivos, culturales y de toma de decisiones.',
				'Facilitar alianzas con entidades públicas, organizaciones sociales, academia y otros actores que permitan ampliar las oportunidades disponibles para las mujeres.',
				'Incorporar el enfoque de igualdad de género de manera transversal en los programas y proyectos de la Fundación.',
			),
		),
		array(
			'slug'  => 'cultura',
			'title' => 'Cultura, patrimonio, juventudes y desarrollo comunitario',
			'short' => 'Cultura, patrimonio y juventudes',
			'img'   => 'cabalgata',
			'alt'   => 'Cabalgata por un camino rural de montaña',
			'resumen' => 'Iniciativas culturales, patrimoniales, deportivas y recreativas que fortalecen la identidad y crean espacios protectores para los jóvenes.',
			'general' => 'Fortalecer la identidad, participación y cohesión de las comunidades mediante iniciativas culturales, patrimoniales, deportivas, recreativas y de desarrollo juvenil que generen espacios protectores y de encuentro, fortalezcan el sentido de pertenencia y promuevan la participación activa de las nuevas generaciones en el desarrollo de sus territorios.',
			'especificos' => array(
				'Promover iniciativas orientadas a la valoración, conservación y difusión de la cultura y el patrimonio de las comunidades.',
				'Desarrollar actividades culturales que permitan fortalecer la identidad y el sentido de pertenencia territorial.',
				'Generar espacios sanos de participación, encuentro y desarrollo para jóvenes.',
				'Promover programas deportivos y recreativos como herramientas de integración, convivencia y aprovechamiento positivo del tiempo libre.',
				'Desarrollar actividades que favorezcan el encuentro intergeneracional y la transmisión de conocimientos, tradiciones y expresiones culturales.',
				'Fortalecer iniciativas culturales y comunitarias desarrolladas por jóvenes, mujeres, comunidades indígenas y otros grupos participantes.',
				'Promover emprendimientos culturales que permitan articular identidad, patrimonio y oportunidades de generación de ingresos.',
				'Construir alianzas con organizaciones culturales, entidades territoriales, universidades, sociedad civil y otros actores para fortalecer las iniciativas.',
			),
		),
		array(
			'slug'  => 'inclusion',
			'title' => 'Inclusión y protección de poblaciones en condición de vulnerabilidad',
			'short' => 'Inclusión y protección',
			'img'   => 'brigada',
			'alt'   => 'Jornada comunitaria con ambulancia y voluntarios en una zona rural',
			'resumen' => 'Atención diferencial para primera infancia, juventudes, adultos mayores, personas con discapacidad, madres cabeza de hogar y comunidades indígenas.',
			'general' => 'Promover la inclusión social y el mejoramiento de las condiciones de vida de poblaciones que enfrentan mayores barreras económicas, sociales, físicas, culturales o generacionales, procurando que los programas y proyectos de la Fundación respondan de manera diferenciada a sus necesidades y fortalezcan sus capacidades para participar activamente en el desarrollo de sus comunidades.',
			'especificos' => array(
				'Incorporar criterios de inclusión y atención diferencial en la formulación e implementación de los proyectos institucionales.',
				'Promover acciones específicas para primera infancia, juventudes, adultos mayores, personas con discapacidad, madres cabeza de hogar y comunidades indígenas.',
				'Identificar las principales barreras que limitan el acceso de estas poblaciones a oportunidades sociales, educativas, económicas y comunitarias.',
				'Promover entornos accesibles y mecanismos que favorezcan la participación efectiva de personas con discapacidad.',
				'Fortalecer acciones dirigidas al bienestar y participación social de los adultos mayores.',
				'Reconocer y respetar las particularidades culturales y territoriales de las comunidades indígenas en las intervenciones desarrolladas con ellas.',
				'Promover la participación de los beneficiarios en la identificación de necesidades y construcción de soluciones.',
			),
		),
	);
}

/**
 * Valores institucionales.
 */
function fc_valores() {
	return array(
		'Filantropía'   => 'Ponemos nuestras capacidades, conocimientos, tiempo y recursos al servicio del bienestar colectivo, buscando transformaciones que trasciendan la asistencia inmediata.',
		'Servicio'      => 'Escuchamos las necesidades de las comunidades, reconocemos sus capacidades y trabajamos junto a ellas, orientados siempre al bienestar, la dignidad y el desarrollo humano.',
		'Gratitud'      => 'Valoramos el aporte de cada persona, comunidad, voluntario, institución, aliado y cooperante que contribuye a nuestra misión.',
		'Compromiso'    => 'Asumimos con responsabilidad los desafíos de las comunidades: continuidad, cumplimiento, buena gestión de los recursos y orientación a resultados sostenibles.',
		'Identidad'     => 'Valoramos las raíces, conocimientos y tradiciones de cada comunidad, y reconocemos la identidad territorial como un activo para el desarrollo.',
		'Amor por la cultura y el patrimonio' => 'Promovemos la valoración, preservación y transmisión de la cultura y el patrimonio, especialmente entre las nuevas generaciones.',
		'Solidaridad'   => 'Promovemos relaciones solidarias entre comunidades, instituciones, empresas, academia, voluntarios y organizaciones sociales.',
		'Transparencia' => 'Gestionamos los recursos y las relaciones institucionales con responsabilidad, claridad y rendición de cuentas, como principio transversal.',
		'Arraigo territorial' => 'Trabajamos desde y para los territorios, comprendiendo sus necesidades y dinámicas antes de diseñar cualquier intervención.',
		'Inclusión y equidad' => 'Promovemos oportunidades sin importar edad, género, condición económica, discapacidad, origen étnico o contexto territorial.',
	);
}

/**
 * Objetivos de Desarrollo Sostenible a los que contribuye la Fundación.
 */
function fc_ods() {
	return array(
		1  => 'Fin de la pobreza',
		2  => 'Hambre cero',
		4  => 'Educación de calidad',
		5  => 'Igualdad de género',
		8  => 'Trabajo decente y crecimiento económico',
		10 => 'Reducción de las desigualdades',
		11 => 'Ciudades y comunidades sostenibles',
		17 => 'Alianzas para lograr los objetivos',
	);
}

/**
 * Fotografías de la galería (archivo => descripción).
 */
function fc_galeria() {
	return array(
		'colina'             => 'Participantes de una jornada en la cima de una colina',
		'pendon-comunidad'   => 'Comunidad reunida junto al pendón de la Fundación Casanare',
		'brigada'            => 'Jornada comunitaria con ambulancia y voluntarios',
		'cabalgata'          => 'Cabalgata por un camino rural de montaña',
		'equipo'             => 'Equipo de la Fundación Casanare',
		'encuentro-banderas' => 'Encuentro con banderas y el pendón de la fundación',
		'quebrada'           => 'Trabajo comunitario en una quebrada',
		'campamento'         => 'Campamento durante una jornada en el territorio',
		'fogata'             => 'Fogata en un encuentro comunitario',
		'taller'             => 'Taller de formación con mujeres',
		'lideres-parque'     => 'Líderes reunidos en el parque de un municipio',
		'dialogo'            => 'Diálogo entre líderes durante un encuentro',
		'escuela-vereda'     => 'Escuela y cancha en una vereda',
		'camino-mulas'       => 'Campesinos con mulas en un camino de vereda',
		'montana'            => 'Paisaje de montaña del territorio',
		'atardecer'          => 'Atardecer en el territorio',
		'convenio-uniminuto' => 'Convenio marco de cooperación con UNIMINUTO (2017)',
	);
}
