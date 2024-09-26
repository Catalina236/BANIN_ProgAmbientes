<?php
$datos = [
    "experiencia" => [
        ["subcategoria" => "Técnica", "ponderacion" => 2.5],
        ["subcategoria" => "Docente", "ponderacion" => 2.5],
        ["subcategoria" => "Instructor SENA", "ponderacion" => 3.5],
        "ponderacion_maxima" => 48,
        "observacion" => "Puntos por año (12 meses)"
    ],
    "poblacion_vulnerable" => [
        ["subcategoria" => "Lineamientos Circular 01-3-2022-000227", "ponderacion" => 100],
        "ponderacion_maxima" => 5,
        "observacion" => "Se debe demostrar de acuerdo a los lineamientos Circular 01-3-2022-000227"
    ],
    "certificacion_competencias" => [
        ["subcategoria" => "Pedagogía y Técnica", "ponderacion" => 100],
        "ponderacion_maxima" => 4,
        "observacion" => "No es acumulable. Debe estar vigente la certificación."
    ],
    "formacion_laboral" => [
        ["subcategoria" => "CAP / Técnico laboral", "ponderacion" => 100],
        "ponderacion_maxima" => 3,
        "observacion" => "No es acumulable. Debe ser relacionada con la formación a ejecutar."
    ],
    "educacion" => [
        ["subcategoria" => "Técnico profesional", "ponderacion" => 0],
        ["subcategoria" => "Especialización técnica", "ponderacion" => 0],
        ["subcategoria" => "Tecnología", "ponderacion" => 20],
        ["subcategoria" => "Especialización tecnológica", "ponderacion" => 30],
        ["subcategoria" => "Profesional Universitario", "ponderacion" => 60],
        ["subcategoria" => "Especialización", "ponderacion" => 80],
        ["subcategoria" => "Maestría / Doctorado", "ponderacion" => 100],
        "ponderacion_maxima" => 40,
        "observacion" => "Aplica al máximo nivel académico del aspirante"
    ]
];


echo json_encode($datos);
