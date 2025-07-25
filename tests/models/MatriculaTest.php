<?php

require_once __DIR__ . '/../../vendor/autoload.php';
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../../app/models/Matricula.php';

class MatriculaTest extends TestCase
{
    public function testModelImplementsCreateMethod()
    {
        $mockPDO = $this->createMock(PDO::class);
        $model = new Matricula($mockPDO);

        $this->assertTrue(method_exists($model, 'create'));
    }
}
