<?php
function exibirlivros($livros){
    echo "
    <html>
    <head>
        <meta charset='UTF-8'>
        <title>Lista de Livros</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <div class='container'>
            <h2>Lista de Livros</h2>
            <ul class='livros-lista'>";
    
    foreach ($livros as $livro){
        echo "<li>
                <strong>{$livro['titulo']}</strong><br>
                Autor: {$livro['Autor']}<br>
                Ano: {$livro['Ano_de_Publicação']}
              </li>";
    }

    echo "  </ul>
        </div>
    </body>
    </html>
    ";
}
?>
