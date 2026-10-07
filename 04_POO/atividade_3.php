<?php

class Aula{

public $disciplina;
public $professor;
public $duracao;
public $n_sala;
public $bloco;

function exibirInformações(){
    echo "Diciplina: $this->disciplina <br>";
    echo "professor: $this->professor <br>";
    echo "duração: $this->duracao <br>";
    echo "Número de sala: $this->n_sala <br>";
    echo "bloco: $this->bloco <br>";
}

function trocarProfessor($nome_professor){
    $this->professor = $nome_professor;
    echo "O novo professor é $this->professor <br>";
}

function alterarLocal($novo_bloco,$novo_numero_sala){
    $this-> n_sala = $novo_numero_sala;
    $this->bloco = $novo_bloco;

    echo "O novo local é $this->bloco $this->n_sala <br>";
   
    }
}

$aula1 = new Aula();
$aula1 ->disciplina = "Programação";
$aula1 ->professor = "Leonardo";
$aula1 ->duracao = 4;
$aula1 ->n_sala = 2;
$aula1 ->bloco = "Anexo";

$aula1->exibirInformações();
echo "<hr>";
$aula1->trocarProfessor("Grabriel");
echo "<hr>";
$aula1->alterarLocal("B",10);
echo "<hr>";
$aula1->exibirInformações();

$aula1 = new Aula();
$aula1 ->disciplina = "Baco de Dados";
$aula1 ->professor = "Maecos";
$aula1 ->duracao = 2;
$aula1 ->n_sala = 8;
$aula1 ->bloco = "C";

$aula1->exibirInformações();
echo "<hr>";
$aula1->trocarProfessor("Marcos");
echo "<hr>";
$aula1->alterarLocal("A",10);
echo "<hr>";
$aula1->exibirInformações();



?>
