<?php

class Aluno
{
    private string $nome;
    private int $idade;
    private string $matricula;
    private float $nota1;
    private float $nota2;
    private float $peso1;
    private float $peso2;

    public function IniAluno(string $nome, int $idade, string $matricula, float $nota1, float $nota2, float $peso1, float $peso2): void
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->matricula = $matricula;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->peso1 = $peso1;
        $this->peso2 = $peso2;
    }

    public function calcularMedia(): float
    {
        return ($this->nota1 * $this->peso1 + $this->nota2 * $this->peso2) / ($this->peso1 + $this->peso2);
    }

    public function verificarAprovacao(): bool
    {
        return $this->calcularMedia() >= 7;
    }

    public function exibirDados(): void
    {
    echo "Nome: $this->nome\n";
    echo "Idade: $this->idade\n";
    echo "Matrícula: $this->matricula\n";
    echo "Média: " . number_format($this->calcularMedia(), 2) . "\n";
    echo "Status: " . ($this->verificarAprovacao() ? 'Aprovado' : 'Reprovado') . "\n";
    }
}
?>