<?php

    require_once 'livro.php';
    require_once 'livroView.php';


   
    class livroController{
        
        
        private $model;

        
        public function __construct(){
            
            $this->model=new Livro();
        }
        
        public function listar(){
            
            $livros = $this->model->listarlivros();
            
            exibirlivros($livros);
        }
    }
    
    $controler = new livroController();

    $controler->listar();
?>