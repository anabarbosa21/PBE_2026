<?php

class Livro {

    public $titulo;
    public $autor;
    public $paginas;
    public $anoPublicacao;

    public function __construct($titulo, $autor, $paginas, $anoPublicacao = "Desconhecido") {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->anoPublicacao = $anoPublicacao;
    }

    public function exibirDetalhes() {
        echo "Título: $this->titulo, Autor: $this->autor,Páginas: $this->paginas,Publicado em: $this->anoPublicacao";
        echo "<hr>";
    }
}

$livro1 = new Livro("Dom Casmurro", "Machado de Assis", 256, 1899);

$livro2 = new Livro("O Pequeno Príncipe", "Antoine de Saint-Exupéry", 96);

$livro1->exibirDetalhes();
$livro2->exibirDetalhes();

?>