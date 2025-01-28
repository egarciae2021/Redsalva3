<?php
// Definir las variables de metadatos comunes
$commonMetadata = [
    'title' => 'Clinica Red Salva',
    'keywords' => '', // Tus palabras clave comunes
    'description' => ''
];

// Definir las variables específicas de cada página
$pageSpecificMetadata = [
    'index' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/nosotros.jpg',
        'title' => 'Clinica Red Salva'
    ],
    'nosotros' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/nosotros.jpg',
        'title' => 'Nosotros | Clinica Red Salva',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    'staff-medico' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/nosotros.jpg',
        'title' => 'Staff Médico | Clinica Red Salva',
        'h1' => 'Staff Médico',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/anestesiologia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/anestesiologia.webp',
        'title' => 'Anestesiologia | Clinica Red Salva',
        'h1' => 'Anestesiologia',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/anestesiologia/consulta-ambulatoria-de-riesgo-anestesico' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/consulta-ambulatoria-de-riesgo-anestesico.webp',
        'title' => 'Consulta ambulatoria de riesgo anestésico | Clinica Red Salva',
        'h1' => 'Consulta ambulatoria de riesgo anestésico',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/anestesiologia/consulta-especializada-de-tratamiento-del-dolor' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/consulta-especializada-de-tratamiento-del-dolor.webp',
        'title' => 'Consulta especializada de tratamiento del dolor | Clinica Red Salva',
        'h1' => 'Consulta especializada de tratamiento del dolor',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/anestesiologia/otra' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/consulta-especializada-de-tratamiento-del-dolor.webp',
        'title' => 'Consulta especializada de tratamiento del dolor | Clinica Red Salva',
        'h1' => 'Consulta especializada de tratamiento del dolor',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/anestesiologia/consulta-especializada-de-cuidados-paliativos' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/consulta-especializada-de-cuidados-paliativos.webp',
        'title' => 'Consulta especializada de cuidados paliativos | Clinica Red Salva',
        'h1' => 'Consulta especializada de cuidados paliativos',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/anestesiologia/procedimientos-de-intervencionismo-en-dolor' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/procedimientos-de-intervencionismo-en-dolor.webp',
        'title' => 'Procedimientos de intervencionismo en dolor | Clinica Red Salva',
        'h1' => 'Procedimientos de intervencionismo en dolor',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/anestesiologia/atencion-de-interconsultas-hospitalarias-para-manejo-del-dolor' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/atencion-de-interconsultas-hospitalarias-para-manejo-del-dolor.webp',
        'title' => 'Atención de interconsultas hospitalarias para manejo del dolor | Clinica Red Salva',
        'h1' => 'Atención de interconsultas hospitalarias para manejo del dolor',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/anestesiologia/anestesia-ambulatoria-para-procedimientos-fuera-del-quirofano' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/anestesia-ambulatoria-para-procedimientos-fuera-del-quirofano.webp',
        'title' => 'Anestesia ambulatoria para procedimientos fuera del quirófano | Clinica Red Salva',
        'h1' => 'Anestesia ambulatoria para procedimientos fuera del quirófano',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/especialidades/cardiologia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/cardiologia.webp',
        'title' => 'Cardiología | Clinica Red Salva',
        'h1' => 'Cardiología',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cardiologia/arritmia-cardiaca' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/arritmia-cardiaca.webp',
        'title' => 'Arritmia cardiaca | Clinica Red Salva',
        'h1' => 'Arritmia cardiaca',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cardiologia/cardiopatia-coronaria' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/cardiopatia-coronaria.webp',
        'title' => 'Cardiopatía coronaria | Clinica Red Salva',
        'h1' => 'Cardiopatía coronaria',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cardiologia/hipertension-arterial' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/hipertension-arterial.webp',
        'title' => 'Hipertensión arterial | Clinica Red Salva',
        'h1' => 'Hipertensión arterial',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cardiologia/insuficiencia-cardiaca' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/insuficiencia-cardiaca.webp',
        'title' => 'Insuficiencia cardiaca | Clinica Red Salva',
        'h1' => 'Insuficiencia cardiaca',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cardiologia/patologia-del-sistema-circulatorio' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/patologia-del-sistema-circulatorio.webp',
        'title' => 'Patología del sistema circulatorio | Clinica Red Salva',
        'h1' => 'Patología del sistema circulatorio',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cardiologia/valvulopatias' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/valvulopatias.webp',
        'title' => 'Valvulopatías | Clinica Red Salva',
        'h1' => 'Valvulopatías',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],


    '/especialidades/cirugia-bariatrica-y-metabolica' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/cirugia-bariatrica-y-metabolica.webp',
        'title' => 'Cirugía Bariátrica y Metabólica | Clinica Red Salva',
        'h1' => 'Cirugía Bariátrica y Metabólica',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-bariatrica-y-metabolica/by-pass-gastrico' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/by-pass-gastrico.webp',
        'title' => 'By Pass Gástrico | Clinica Red Salva',
        'h1' => 'By Pass Gástrico',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-bariatrica-y-metabolica/manga-gastrica' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/manga-gastrica.webp',
        'title' => 'Manga Gástrica | Clinica Red Salva',
        'h1' => 'Manga Gástrica',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-bariatrica-y-metabolica/mini-by-pass-gastrico' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/mini-by-pass-gastrico.webp',
        'title' => 'Mini By Pass Gástrico | Clinica Red Salva',
        'h1' => 'Mini By Pass Gástrico',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],





    '/especialidades/cirugia-general' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/cirugia-general.webp',
        'title' => 'Cirugía General | Clinica Red Salva',
        'h1' => 'Cirugía General',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-general/apendicectomia-laparoscopica' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/apendicectomia-laparoscopica.webp',
        'title' => 'Apendicectomía laparoscópica | Clinica Red Salva',
        'h1' => 'Apendicectomía laparoscópica',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-general/colecistectomia-laparoscopica' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/colecistectomia-laparoscopica.webp',
        'title' => 'Colecistectomía laparoscópica | Clinica Red Salva',
        'h1' => 'Colecistectomía laparoscópica',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-general/cirugia-anal-y-perianal' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/cirugia-anal-y-perianal.webp',
        'title' => 'Cirugía anal y perianal | Clinica Red Salva',
        'h1' => 'Cirugía anal y perianal',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-general/cirugia-de-enfermedad-pilonoidal' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/cirugia-de-enfermedad-pilonoidal.webp',
        'title' => 'Cirugía de enfermedad pilonidal | Clinica Red Salva',
        'h1' => 'Cirugía de enfermedad pilonidal',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-general/cirugia-de-eventraciones' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/cirugia-de-eventraciones.webp',
        'title' => 'Cirugía de eventraciones | Clinica Red Salva',
        'h1' => 'Cirugía de eventraciones',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-general/cirugia-de-hernia-hiatal' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/cirugia-de-hernia-hiatal.webp',
        'title' => 'Cirugía de hernia hiatal | Clinica Red Salva',
        'h1' => 'Cirugía de hernia hiatal',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-general/cirugia-de-higado' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/cirugia-de-higado.webp',
        'title' => 'Cirugía de hígado | Clinica Red Salva',
        'h1' => 'Cirugía de hígado',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-general/cirugia-de-prolapso-rectal' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/cirugia-de-prolapso-rectal.webp',
        'title' => 'Cirugía de prolapspo rectal | Clinica Red Salva',
        'h1' => 'Cirugía de prolapspo rectal',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-general/hernioplastia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/hernioplastia.webp',
        'title' => 'Hernioplastía | Clinica Red Salva',
        'h1' => 'Hernioplastía',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-general/extirpacion-de-tumores-de-piel-y-partes-blandas' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/extirpacion-de-tumores-de-piel-y-partes-blandas.webp',
        'title' => 'Extirpación de tumores de piel y partes blandas | Clinica Red Salva',
        'h1' => 'Extirpación de tumores de piel y partes blandas',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],





    '/especialidades/cirugia-plastica' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/cirugia-plastica.webp',
        'title' => 'Cirugía Plástica | Clinica Red Salva',
        'h1' => 'Cirugía Plástica',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-plastica/abdominoplastia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/abdominoplastia.webp',
        'title' => 'Abdominoplastía | Clinica Red Salva',
        'h1' => 'Abdominoplastía',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-plastica/bichectomia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/bichectomia.webp',
        'title' => 'Bichectomía | Clinica Red Salva',
        'h1' => 'Bichectomía',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-plastica/blefaroplastia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/blefaroplastia.webp',
        'title' => 'Blefaroplastía | Clinica Red Salva',
        'h1' => 'Blefaroplastía',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-plastica/implante-y-o-reduccion-de-mamas' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/implante-y-o-reduccion-de-mamas.webp',
        'title' => 'Implante y/o reducción de mamas | Clinica Red Salva',
        'h1' => 'Implante y/o reducción de mamas',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-plastica/liposuccion' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/liposuccion.webp',
        'title' => 'Liposucción | Clinica Red Salva',
        'h1' => 'Liposucción',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-plastica/mentoplastia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/mentoplastia.webp',
        'title' => 'Mentoplastía | Clinica Red Salva',
        'h1' => 'Mentoplastía',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-plastica/otoplastia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/otoplastia.webp',
        'title' => 'Otoplastía | Clinica Red Salva',
        'h1' => 'Otoplastía',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-plastica/rinoplastia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/rinoplastia.webp',
        'title' => 'Rinoplastía | Clinica Red Salva',
        'h1' => 'Rinoplastía',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/dermatologia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/dermatologia.webp',
        'title' => 'Dermatología | Clinica Red Salva',
        'h1' => 'Dermatología',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/dermatologia/dermatologia-pediatrica' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/dermatologia-pediatrica.webp',
        'title' => 'Dermatología Pediátrica | Clinica Red Salva',
        'h1' => 'Dermatología Pediátrica',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/dermatologia/dermatologia-para-gestantes' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/dermatologia-para-gestantes.webp',
        'title' => 'Dermatología para gestantes | Clinica Red Salva',
        'h1' => 'Dermatología para gestantes',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/especialidades/endocrinologia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/endocrinologia.webp',
        'title' => 'Endocrinología | Clinica Red Salva',
        'h1' => 'Endocrinología',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/endocrinologia/acromegalia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/acromegalia.webp',
        'title' => 'Acromegalia | Clinica Red Salva',
        'h1' => 'Acromegalia',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/endocrinologia/cancer-de-tiroides' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/cancer-de-tiroides.webp',
        'title' => 'Cáncer de tiroides | Clinica Red Salva',
        'h1' => 'Cáncer de tiroides',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/endocrinologia/diabetes-mellitus' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/diabetes-mellitus.webp',
        'title' => 'Diabetes mellitus | Clinica Red Salva',
        'h1' => 'Diabetes mellitus',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/endocrinologia/diabetes-gestacional' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/diabetes-gestacional.webp',
        'title' => 'Diabetes gestacional | Clinica Red Salva',
        'h1' => 'Diabetes gestacional',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/endocrinologia/dislipidemias' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/dislipidemias.webp',
        'title' => 'Dislipidemias | Clinica Red Salva',
        'h1' => 'Dislipidemias',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/endocrinologia/enfermedad-de-addison' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/enfermedad-de-addison.webp',
        'title' => 'Enfermedad de addison | Clinica Red Salva',
        'h1' => 'Enfermedad de addison',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/endocrinologia/hipotiroidismo-e-hipertiroidismo' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/hipotiroidismo-e-hipertiroidismo.webp',
        'title' => 'Hipotiroidismo e hipertiroidismo | Clinica Red Salva',
        'h1' => 'Hipotiroidismo e hipertiroidismo',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/endocrinologia/sindrome-de-cushing' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/sindrome-de-cushing.webp',
        'title' => 'Síndrome de cushing | Clinica Red Salva',
        'h1' => 'Síndrome de cushing',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/endocrinologia/sindrome-de-ovario-poliquistico' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/sindrome-de-ovario-poliquistico.webp',
        'title' => 'Síndrome de ovario poliquístico  | Clinica Red Salva',
        'h1' => 'Síndrome de ovario poliquístico ',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/endocrinologia/sobrepeso-y-obesidad' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/sobrepeso-y-obesidad.webp',
        'title' => 'Sobrepeso y obesidad | Clinica Red Salva',
        'h1' => 'Sobrepeso y obesidad',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/especialidades/gastroenterologia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/gastroenterologia.webp',
        'title' => 'Gastroenterologia | Clinica Red Salva',
        'h1' => 'Gastroenterologia',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/gastroenterologia/colonoscopia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/colonoscopia.webp',
        'title' => 'Colonoscopía | Clinica Red Salva',
        'h1' => 'Colonoscopía',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/gastroenterologia/endoscopia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/endoscopia.webp',
        'title' => 'Endoscopía | Clinica Red Salva',
        'h1' => 'Endoscopía',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/gastroenterologia/descarte-de-helicobacter-pylori' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/descarte-de-helicobacter-pylori.webp',
        'title' => 'Descarte de Helicobacter Pylori | Clinica Red Salva',
        'h1' => 'Descarte de Helicobacter Pylori',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/gastroenterologia/cancer-de-colon' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/cancer-de-colon.webp',
        'title' => 'Cáncer de colon | Clinica Red Salva',
        'h1' => 'Cáncer de colon',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/gastroenterologia/cancer-de-estomago' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/cancer-de-estomago.webp',
        'title' => 'Cáncer de estómago | Clinica Red Salva',
        'h1' => 'Cáncer de estómago',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/gastroenterologia/enfermedad-por-reflujo-gastroesofagico' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/enfermedad-por-reflujo-gastroesofagico.webp',
        'title' => 'Enfermedad por reflujo gastroesofágico | Clinica Red Salva',
        'h1' => 'Enfermedad por reflujo gastroesofágico',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/gastroenterologia/gastritis' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/gastritis.webp',
        'title' => 'Gastritis | Clinica Red Salva',
        'h1' => 'Gastritis',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/gastroenterologia/hemorroides' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/hemorroides.webp',
        'title' => 'Hemorroides | Clinica Red Salva',
        'h1' => 'Hemorroides',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/gastroenterologia/ulcera-peptica' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/ulcera-peptica.webp',
        'title' => 'Úlcera péptica | Clinica Red Salva',
        'h1' => 'Úlcera péptica',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/especialidades/ginecologia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/ginecologia.webp',
        'title' => 'Ginecologia | Clinica Red Salva',
        'h1' => 'Ginecologia',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/ginecologia/cirugia-de-prolapso-e-incontinencia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/cirugia-de-prolapso-e-incontinencia.webp',
        'title' => 'Cirugía de prolapso e incontinencia  | Clinica Red Salva',
        'h1' => 'Cirugía de prolapso e incontinencia ',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/ginecologia/cirugia-de-utero-y-anexos' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/cirugia-de-utero-y-anexos.webp',
        'title' => 'Cirugía de útero y anexos | Clinica Red Salva',
        'h1' => 'Cirugía de útero y anexos',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/ginecologia/colpografia-anterior-y-posterior' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/colpografia-anterior-y-posterior.webp',
        'title' => 'Colpografía Anterior y Posterior | Clinica Red Salva',
        'h1' => 'Colpografía Anterior y Posterior',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/ginecologia/cono-leep' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/cono-leep.webp',
        'title' => 'Cono LEEP | Clinica Red Salva',
        'h1' => 'Cono LEEP',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/ginecologia/dilatacion-y-curetaje' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/dilatacion-y-curetaje.webp',
        'title' => 'Dilatación y curetaje | Clinica Red Salva',
        'h1' => 'Dilatación y curetaje',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/ginecologia/histeroscopia-y-procedimientos-histeroscopicos' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/histeroscopia-y-procedimientos-histeroscopicos.webp',
        'title' => 'Histeroscopia y Procedimientos Histeroscópicos | Clinica Red Salva',
        'h1' => 'Histeroscopia y Procedimientos Histeroscópicos',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/ginecologia/laparoscopia-ginecologica' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/laparoscopia-ginecologica.webp',
        'title' => 'Laparoscopia Ginecológica | Clinica Red Salva',
        'h1' => 'Laparoscopia Ginecológica',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/ginecologia/ligadura-de-trompas' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/ligadura-de-trompas.webp',
        'title' => 'Ligadura de Trompas | Clinica Red Salva',
        'h1' => 'Ligadura de Trompas',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/ginecologia/recanalizacion-de-trompas' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/recanalizacion-de-trompas.webp',
        'title' => 'Recanalización de Trompas | Clinica Red Salva',
        'h1' => 'Recanalización de Trompas',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/ginecologia/tratamiento-quirugico-de-endometriosis' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/tratamiento-quirugico-de-endometriosis.webp',
        'title' => 'Tratamientos quirúrgico de endometriosis | Clinica Red Salva',
        'h1' => 'Tratamiento quirúrgico de endometriosis',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/especialidades/mastologia-y-cancer-de-piel' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/mastologia-y-cancer-de-piel.webp',
        'title' => 'Mastología y cáncer de piel | Clinica Red Salva',
        'h1' => 'Mastología y cáncer de piel',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/mastologia-y-cancer-de-piel/ecografia-de-mama' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/ecografia-de-mama.webp',
        'title' => 'Ecografía de Mama | Clinica Red Salva',
        'h1' => 'Ecografía de Mama',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/mastologia-y-cancer-de-piel/mamografia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/mamografia.webp',
        'title' => 'Mamografía | Clinica Red Salva',
        'h1' => 'Mamografía',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/mastologia-y-cancer-de-piel/mastitis-granulomatosa' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/mastitis-granulomatosa.webp',
        'title' => 'Mastitis Granulomatosa | Clinica Red Salva',
        'h1' => 'Mastitis Granulomatosa',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/mastologia-y-cancer-de-piel/mastectomia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/mastectomia.webp',
        'title' => 'Mastectomía | Clinica Red Salva',
        'h1' => 'Mastectomía',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/mastologia-y-cancer-de-piel/biopsia-guiada-por-ecografia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/biopsia-guiada-por-ecografia.webp',
        'title' => 'Biopsia guiada por ecografía | Clinica Red Salva',
        'h1' => 'Biopsia guiada por ecografía',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/mastologia-y-cancer-de-piel/todo-sobre-el-cancer-de-mama' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/todo-sobre-el-cancer-de-mama.webp',
        'title' => 'Todo sobre el cáncer de mama | Clinica Red Salva',
        'h1' => 'Todo sobre el cáncer de mama',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/mastologia-y-cancer-de-piel/cirugias-de-mama' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/cirugias-de-mama.webp',
        'title' => 'Cirugías de Mama | Clinica Red Salva',
        'h1' => 'Cirugías de Mama',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/mastologia-y-cancer-de-piel/cirugias-de-piel' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/cirugias-de-piel.webp',
        'title' => 'Cirugías de Piel | Clinica Red Salva',
        'h1' => 'Cirugías de Piel',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/especialidades/neumologia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/neumologia.webp',
        'title' => 'Neumología | Clinica Red Salva',
        'h1' => 'Neumología',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/neumologia/asma-bronquial' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/asma-bronquial.webp',
        'title' => 'Asma bronquial | Clinica Red Salva',
        'h1' => 'Asma bronquial',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/neumologia/patologia-pulmonar-infecciosa' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/patologia-pulmonar-infecciosa.webp',
        'title' => 'Patología Pulmonar Infecciosa | Clinica Red Salva',
        'h1' => 'Patología Pulmonar Infecciosa',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/neumologia/cancer-de-pulmon' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/cancer-de-pulmon.webp',
        'title' => 'Cáncer de pulmón | Clinica Red Salva',
        'h1' => 'Cáncer de pulmón',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/neumologia/enfermedad-pulmonar-obstructiva-cronica' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/enfermedad-pulmonar-obstructiva-cronica.webp',
        'title' => 'Enfermedad Pulmonar Obstructiva Crónica | Clinica Red Salva',
        'h1' => 'Enfermedad Pulmonar Obstructiva Crónica',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/especialidades/neurologia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/neurologia.webp',
        'title' => 'Neurología | Clinica Red Salva',
        'h1' => 'Neurología',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/neurologia/cefaleas-y-migranas' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/cefaleas-y-migranas.webp',
        'title' => 'Cefaleas y Migrañas | Clinica Red Salva',
        'h1' => 'Cefaleas y Migrañas',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/neurologia/demencias' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/demencias.webp',
        'title' => 'Demencias | Clinica Red Salva',
        'h1' => 'Demencias',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/neurologia/enfermedad-de-parkinson' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/enfermedad-de-parkinson.webp',
        'title' => 'Enfermedad de parkinson | Clinica Red Salva',
        'h1' => 'Enfermedad de parkinson',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/neurologia/epilepsia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/epilepsia.webp',
        'title' => 'Epilepsia | Clinica Red Salva',
        'h1' => 'Epilepsia',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/neurologia/neuralgia-del-trigemino' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/neuralgia-del-trigemino.webp',
        'title' => 'Neuralgia del Trigémino | Clinica Red Salva',
        'h1' => 'Neuralgia del Trigémino',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/especialidades/oftalmologia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/oftalmologia.webp',
        'title' => 'Oftalmología | Clinica Red Salva',
        'h1' => 'Oftalmología',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/oftalmologia/catarata' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/catarata.webp',
        'title' => 'Catarata | Clinica Red Salva',
        'h1' => 'Catarata',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/oftalmologia/estrabismo' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/estrabismo.webp',
        'title' => 'Estrabismo | Clinica Red Salva',
        'h1' => 'Estrabismo',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/oftalmologia/pterigion' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/pterigion.webp',
        'title' => 'Pterigion | Clinica Red Salva',
        'h1' => 'Pterigion',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/oftalmologia/glaucoma' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/glaucoma.webp',
        'title' => 'Glaucoma | Clinica Red Salva',
        'h1' => 'Glaucoma',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/oftalmologia/cirugia-de-desprendimiento-de-retina' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/cirugia-de-desprendimiento-de-retina.webp',
        'title' => 'Cirugía de desprendimiento de retina | Clinica Red Salva',
        'h1' => 'Cirugía de desprendimiento de retina',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/oftalmologia/tratamiento-de-retinoplastia-diabetica' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/tratamiento-de-retinoplastia-diabetica.webp',
        'title' => 'Tratamiento de retinoplastia diabética | Clinica Red Salva',
        'h1' => 'Tratamiento de retinoplastia diabética',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/especialidades/otorrinolaringologia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/otorrinolaringologia.webp',
        'title' => 'Otorrinolaringología | Clinica Red Salva',
        'h1' => 'Otorrinolaringología',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/otorrinolaringologia/naso-laringologia-flexible' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/naso-laringologia-flexible.webp',
        'title' => 'Naso laringoscopia flexible | Clinica Red Salva',
        'h1' => 'Naso laringoscopia flexible',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/otorrinolaringologia/endoscopia-nasal-laringea-y-otica' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/endoscopia-nasal-laringea-y-otica.webp',
        'title' => 'Endoscopia nasal, laríngea y ótica | Clinica Red Salva',
        'h1' => 'Endoscopia nasal, laríngea y ótica',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/otorrinolaringologia/cauterizacion-nasal' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/cauterizacion-nasal.webp',
        'title' => 'Cauterización nasal | Clinica Red Salva',
        'h1' => 'Cauterización nasal',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/otorrinolaringologia/lavado-de-oidos' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/lavado-de-oidos.webp',
        'title' => 'Lavado de oídos | Clinica Red Salva',
        'h1' => 'Lavado de oídos',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/otorrinolaringologia/microaspiracion-de-oidos-entre-otros' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/microaspiracion-de-oidos-entre-otros.webp',
        'title' => 'Micro aspiración de oídos, entre otros | Clinica Red Salva',
        'h1' => 'Micro aspiración de oídos, entre otros',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/otorrinolaringologia/potenciales-evocados-auditivos' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/potenciales-evocados-auditivos.webp',
        'title' => 'Potenciales evocados auditivos | Clinica Red Salva',
        'h1' => 'Potenciales evocados auditivos',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/otorrinolaringologia/audiometria' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/audiometria.webp',
        'title' => 'Audiometría | Clinica Red Salva',
        'h1' => 'Audiometría',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/otorrinolaringologia/timpanometria' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/timpanometria.webp',
        'title' => 'Timpanometria | Clinica Red Salva',
        'h1' => 'Timpanometria',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/otorrinolaringologia/logo-audiometria' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/logo-audiometria.webp',
        'title' => 'Logo audiometría | Clinica Red Salva',
        'h1' => 'Logo audiometría',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],

    '/especialidades/otorrinolaringologia/tamizaje-auditivo' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/tamizaje-auditivo.webp',
        'title' => 'Tamizaje auditivo | Clinica Red Salva',
        'h1' => 'Tamizaje auditivo',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/especialidades/pediatria' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/pediatria.webp',
        'title' => 'Pediatría | Clinica Red Salva',
        'h1' => 'Pediatría',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/especialidades/pediatria-vacunas' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/pediatria-vacunas.webp',
        'title' => 'Pediatría Vacunas | Clinica Red Salva',
        'h1' => 'Pediatría Vacunas',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/pediatria-vacunas/bcg' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/bcg.webp',
        'title' => 'BCG | Clinica Red Salva',
        'h1' => 'BCG',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/pediatria-vacunas/dtp' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/dtp.webp',
        'title' => 'DTP | Clinica Red Salva',
        'h1' => 'DTP',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/pediatria-vacunas/hepatitis-a' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/hepatitis-a.webp',
        'title' => 'Hepatitis A | Clinica Red Salva',
        'h1' => 'Hepatitis A',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/pediatria-vacunas/hepatitis-b' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/hepatitis-b.webp',
        'title' => 'Hepatitis B | Clinica Red Salva',
        'h1' => 'Hepatitis B',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/pediatria-vacunas/hexavalente' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/hexavalente.webp',
        'title' => 'Hexavalente | Clinica Red Salva',
        'h1' => 'Hexavalente',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/pediatria-vacunas/influenza' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/influenza.webp',
        'title' => 'Influenza | Clinica Red Salva',
        'h1' => 'Influenza',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/pediatria-vacunas/meningococo' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/meningococo.webp',
        'title' => 'Meningococo | Clinica Red Salva',
        'h1' => 'Meningococo',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/pediatria-vacunas/neumococo' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/neumococo.webp',
        'title' => 'Neumococo | Clinica Red Salva',
        'h1' => 'Neumococo',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/pediatria-vacunas/rotavirus' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/rotavirus.webp',
        'title' => 'Rotavirus | Clinica Red Salva',
        'h1' => 'Rotavirus',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/pediatria-vacunas/triple-viral-mmr' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/triple-viral-mmr.webp',
        'title' => 'Triple viral MMR | Clinica Red Salva',
        'h1' => 'Triple viral MMR',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/pediatria-vacunas/varicela' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/varicela.webp',
        'title' => 'Varicela | Clinica Red Salva',
        'h1' => 'Varicela',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/pediatria-vacunas/virus-del-papiloma-humano' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/virus-del-papiloma-humano.webp',
        'title' => 'Virus del papiloma humano | Clinica Red Salva',
        'h1' => 'Virus del papiloma humano',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/especialidades/traumatologia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/traumatologia.webp',
        'title' => 'Traumatología | Clinica Red Salva',
        'h1' => 'Traumatología',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/servicios/centro-obstetrico' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/centro-obstetrico.webp',
        'title' => 'Centro obstétrico | Clinica Red Salva',
        'h1' => 'Centro obstétrico',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/servicios/centro-quirurgico' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/centro-quirurgico.webp',
        'title' => 'Centro quirúrgico | Clinica Red Salva',
        'h1' => 'Centro quirúrgico',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/servicios/consultas-externas' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/consultas-externas.webp',
        'title' => 'Consultas externas | Clinica Red Salva',
        'h1' => 'Consultas externas',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/servicios/centro-de-vacunacion' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/centro-de-vacunacion.webp',
        'title' => 'Centro de vacunación | Clinica Red Salva',
        'h1' => 'Centro de vacunación',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/servicios/emergencia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/emergencia.webp',
        'title' => 'Emergencia | Clinica Red Salva',
        'h1' => 'Emergencia',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/servicios/farmacia' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/farmacia.webp',
        'title' => 'Farmacia | Clinica Red Salva',
        'h1' => 'Farmacia',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/servicios/hospitalizacion' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/hospitalizacion.webp',
        'title' => 'Hospitalización | Clinica Red Salva',
        'h1' => 'Hospitalización',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/servicios/imagenes' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/imagenes.webp',
        'title' => 'Imágenes | Clinica Red Salva',
        'h1' => 'Imágenes',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/servicios/laboratorio-clinico' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/laboratorio-clinico.webp',
        'title' => 'Laboratorio clínico | Clinica Red Salva',
        'h1' => 'Laboratorio clínico',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/servicios/laboratorio-patologico' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/laboratorio-patologico.webp',
        'title' => 'Laboratorio patológico | Clinica Red Salva',
        'h1' => 'Laboratorio patológico',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/servicios/uci-neonatal' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/uci-neonatal.webp',
        'title' => 'UCI Neonatal | Clinica Red Salva',
        'h1' => 'UCI Neonatal',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/servicios/tamizaje-neonatal' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/tamizaje-neonatal.webp',
        'title' => 'Tamizaje neonatal | Clinica Red Salva',
        'h1' => 'Tamizaje neonatal',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/servicios/visita-guiada' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/visita-guiada.webp',
        'title' => 'Visita guiada | Clinica Red Salva',
        'h1' => 'Visita guiada',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
 
    '/programas/dulce-espera' => [
        'imagen' => 'https://clinicamontesur.com.pe/images/dulce-espera.webp',
        'title' => 'Dulce espera | Clinica Red Salva',
        'h1' => 'Dulce espera',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    // Agrega las páginas específicas restantes aquí
];

// Obtener el nombre de la página actual
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 'index';

// Verificar si la página actual tiene metadatos específicos, de lo contrario, usar los comunes
$metadata = $commonMetadata;

if (isset($pageSpecificMetadata[$page])) {
    $metadata = array_merge($metadata, $pageSpecificMetadata[$page]);
}
// Asignar los valores de metadatos a las variables individuales
$page_title = $metadata['title'];
$page_keyword = $metadata['keywords'];
$page_description = $metadata['description'];
$page_image = $metadata['imagen'];
$h1 = $metadata['h1'];

// Resto del código (requerir header, contenido y footer)
require_once('header.php');
require_once('content/' . $page . '.php');
require_once('bloques.php');
require_once('footer.php');
?>

