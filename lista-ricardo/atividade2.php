<?php

class Livro {
    private $titulo;
    private $autor;
    private $editora;
    private $anoPublicacao;
    private $ISBN;
    private $tipo;
    private $paginas;
    private $status;

    public function __construct($titulo, $autor, $editora, $anoPublicacao, $ISBN, $tipo, $paginas = null, $status = "Disponível") {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->editora = $editora;
        $this->anoPublicacao = $anoPublicacao;
        $this->ISBN = $ISBN;
        $this->tipo = $tipo;
        $this->paginas = $paginas;
        $this->status = $status;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getPaginas() {
        return $this->paginas;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getISBN() {
        return $this->ISBN;
    }

    public function getAnoPublicacao() {
        return $this->anoPublicacao;
    }

    public function getEditora() {
        return $this->editora;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function __toString() {
        return "Livro: {$this->titulo} ({$this->autor}), {$this->anoPublicacao}, ISBN: {$this->ISBN}, Status: {$this->status}";
    }
}

class Biblioteca {
    private $livros = [];

    public function listarLivrosEmprestados() {
        $livrosEmprestados = [];
        foreach ($this->livros as $livro) {
            if ($livro->getStatus() === "Emprestado") {
                $livrosEmprestados[] = $livro;
            }
        }
        return $livrosEmprestados;
    }

    public function listarLivrosDisponiveis() {
        $livrosDisponiveis = [];
        foreach ($this->livros as $livro) {
            if ($livro->getStatus() === "Disponível") {
                $livrosDisponiveis[] = $livro;
            }
        }
        return $livrosDisponiveis;
    }

    public function buscarLivroPorISBN($ISBN) {
        foreach ($this->livros as $livro) {
            if ($livro->getISBN() === $ISBN) {
                return $livro;
            }
        }
        return null;
    }

    public function removerLivro($ISBN) {
        foreach ($this->livros as $key => $livro) {
            if ($livro->getISBN() === $ISBN) {
                unset($this->livros[$key]);
                $this->livros = array_values($this->livros);
                break;
            }
        }
    }

    public function adicionarLivro(Livro $livro) {
        $this->livros[] = $livro;
    }
}

$livro1 = new Livro("O Cortiço", "Aluísio Azevedo", "Editora Nacional", 1890, "888-6677889900", "Físico", 357);
$livro2 = new Livro("Capitães da Areia", "Jorge Amado", "Companhia das Letras", 1937, "858-1122334455", "Físico");

$biblioteca = new Biblioteca();
$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);

$isbnBuscado = "858-1122334455";
$livroEncontrado = $biblioteca->buscarLivroPorISBN($isbnBuscado);
if ($livroEncontrado) {
    echo "Livro encontrado: " . $livroEncontrado . "\n" . '<br>';
} else {
    echo "Livro com ISBN {$isbnBuscado} não encontrado.\n" . '<br>';
}