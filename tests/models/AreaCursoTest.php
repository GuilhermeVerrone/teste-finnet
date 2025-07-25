<?php

use PHPUnit\Framework\TestCase;
use App\Models\AreaCurso;

class AreaCursoTest extends TestCase
{
    public function testModelCanBeInstantiated()
    {
        $mockPDO = $this->createMock(PDO::class);
        $model = new AreaCurso($mockPDO);

        $this->assertInstanceOf(AreaCurso::class, $model);
    }
}
