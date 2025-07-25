<?php

require_once __DIR__ . '/../../vendor/autoload.php';
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../../app/models/Aluno.php';

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
