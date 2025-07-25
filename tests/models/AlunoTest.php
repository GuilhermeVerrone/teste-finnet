<?php

use PHPUnit\Framework\TestCase;
use App\Models\Aluno;

class AlunoTest extends TestCase
{
    public function testModelReturnsExpectedFields()
    {
        $mockPDO = $this->createMock(PDO::class);
        $model = new Aluno($mockPDO);

        $this->assertTrue(method_exists($model, 'getAll'));
        $this->assertTrue(method_exists($model, 'create'));
    }
}
