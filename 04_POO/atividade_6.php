<?php

class Aluno {

    public $nome;
    public $nota1;
    public $nota2;
    public $media;

    public function __construct($nome, $nota1, $nota2) {
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->media = $this->media();
    }

    public function media() {
        return ($this->nota1 + $this->nota2) / 2;
    }
}

$aluno1 = new Aluno("Ana", 8.5, 7.5);
print_r($aluno1);

echo "<hr>";

$aluno2 = new Aluno("Maria", 9, 8);
print_r($aluno2);

?>