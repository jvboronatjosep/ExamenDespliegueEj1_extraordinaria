<?php

namespace App;

class Areas {
    public static function calcularAreas($lado, $base, $altura) {
        $areaCuadrado = $lado * $lado;
        $areaTriangulo = 0.5 * $base * $altura;

        return [
            'cuadrado' => $areaCuadrado,
            'triangulo' => $areaTriangulo
        ];
    }
}
