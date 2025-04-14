<?php
function exibirlivros($livros) {
    echo '
    <style>
        .livros-container {
            font-family: "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .livros-title {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 600;
        }
        
        .livros-list {
            list-style: none;
            padding: 0;
        }
        
        .livros-list li {
            background-color: white;
            margin-bottom: 10px;
            padding: 15px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: transform 0.2s, box-shadow 0.2s;
            border-left: 4px solid #3498db;
        }
        
        .livros-list li:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .livro-info {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .livro-titulo {
            font-weight: bold;
            color: #2c3e50;
        }
        
        .livro-autor {
            color: #7f8c8d;
            font-style: italic;
        }
        
        .livro-ano {
            background-color: #e8f4fc;
            color: #3498db;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: bold;
        }
        
        @media (max-width: 600px) {
            .livros-list li {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
            }
        }
    </style>
    
    <div class="livros-container">
        <h2 class="livros-title">Lista de Livros</h2>
        <ul class="livros-list">';
    
    foreach ($livros as $livro) {
        echo "<li>
                <span class='livro-info'>
                    <span class='livro-titulo'>{$livro['titulo']}</span>
                    <span class='livro-autor'>{$livro['Autor']}</span>
                </span>
                <span class='livro-ano'>{$livro['Ano_de_Publicação']}</span>
              </li>";
    }
    
    echo '</ul></div>';
}
?>