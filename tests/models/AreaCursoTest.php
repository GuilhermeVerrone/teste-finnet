<?php

require_once __DIR__ . '/../../vendor/autoload.php';
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../../app/models/AreaCurso.php';

class AreaCursoTest extends TestCase
{
    public function testModelCanBeInstantiated()
    {
        $mockPDO = $this->createMock(PDO::class);
        $model = new AreaCurso($mockPDO);

        $this->assertInstanceOf(AreaCurso::class, $model);
    }
}
