<?php

// Defina uma classe chamada aluno
class livro{
    // Criar uma propriedade privada(Encapsulamento) chamada $alunos
    // Essa propriedade é um array que armazena dados e alunos.
    // Cada aluno é representado por um array associativo com o nome e idade.
    // [] = array
    private $livros = [
        ['titulo' => '1984', 'Autor' => 'George Orwell', 'Ano_de_Publicação' => 1949],
        ['titulo' => 'Dom Casmurro', 'Autor' => 'Machado de Assis', 'Ano_de_Publicação' => 1899],
        ['titulo' => 'Sapiens: Uma Breve História da Humanidade', 'Autor' => 'Yuval Noah Harari', 'Ano_de_Publicação' => 2011],
        ['titulo' => 'O Conto da Aia', 'Autor' => 'Margaret Atwood', 'Ano_de_Publicação' => 1985],
        ['titulo' => 'A Menina que Roubava Livros', 'Autor' => 'Markus Zusak', 'Ano_de_Publicação' => 2005],
        ['titulo' => 'A Volta dos que não foram V.3', 'Autor' => 'Machado de Assis', 'Ano_de_Publicação' => 1952]
    ];

    // Define um método publico chamado ListarAlunos.
    // Esse metodo serve para "retornar" o conteudo do array $alunos.

    public function listarlivros(){
        return $this->livros;
    }
}

?>