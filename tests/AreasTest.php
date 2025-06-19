<?php

use PHPUnit\Framework\TestCase;
use App\Areas;

class AreasTest extends TestCase
{
    public function testCalcularAreas()
    {
        $res1 = Areas::calcularAreas(4, 0, 0);
        $this->assertEquals(16, $res1['cuadrado']);

        $res2 = Areas::calcularAreas(0, 10, 5);
        $this->assertEquals(25, $res2['triangulo']);
    }
}
