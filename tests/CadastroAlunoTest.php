<?php

require_once __DIR__ . '/../src/CadastroAluno.php';

use PHPUnit\Framework\TestCase;

class CadastroAlunoTest extends TestCase
{
    public function testMedia()
    {
        $aluno = new Aluno();
        $aluno->IniAluno("Luan", 18, "123", 8, 7, 3, 3);
        $this->assertEquals(7.5, $aluno->calcularMedia());
    }

    public function testAprovado()
    {
        $aluno = new Aluno();
        $aluno->IniAluno("Pedro", 18, "456", 8, 7, 1, 1);
        $this->assertTrue($aluno->verificarAprovacao());
    }

    public function testReprovado()
    {
        $aluno = new Aluno();
        $aluno->IniAluno("Jubileu", 17, "789", 6, 5, 1, 1);
        $this->assertFalse($aluno->verificarAprovacao());
    }
}