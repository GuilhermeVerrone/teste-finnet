<?php

use PHPUnit\Framework\TestCase;
use App\Models\Matricula;

class MatriculaTest extends TestCase
{
    public function testModelImplementsCreateMethod()
    {
        $mockPDO = $this->createMock(PDO::class);
        $model = new Matricula($mockPDO);

        $this->assertTrue(method_exists($model, 'create'));
    }
}
