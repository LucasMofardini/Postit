<?php

 class Artigo{
     private $mysql;
    
        public function __construct(mysqli $mysql)
        {
            $this->mysql = $mysql;

        }
        public function exibirTodos():array{

           $resultado = $this->mysql->query('SELECT titulo, conteudo FROM artigo;');
           $artigos = $resultado->fetch_all(MYSQLI_ASSOC);
           
            return $artigos;
        }

    }

?>