<?php

class Pessoa {
    private string $nome;
    private string $sobrenome;
    private int $idade;

    public function __construct(string $nome, string $sobrenome, int $idade) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->idade = $idade;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getSobrenome(): string {
        return $this->sobrenome;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function setSobrenome(string $sobrenome): void {
        $this->sobrenome = $sobrenome;
    }

    public function setIdade(int $idade): void {
        $this->idade = $idade;
    }
}
