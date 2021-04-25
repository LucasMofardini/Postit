<?php

 class Artigo{
     private $mysql;
    
        public function __construct(mysqli $mysql)
        {
            $this->mysql = $mysql;

        }
        public function exibirTodos():array{

           $resultado = $this->mysql->query('SELECT id,titulo, conteudo, horario_publicacao FROM artigo;');
           $artigos = $resultado->fetch_all(MYSQLI_ASSOC);
           
            return $artigos;
        }
        public function adiciona(string $titulo, string $conteudo):void{
            $result = $this->mysql->query("CALL sp_adicionaArtigo('$titulo', '$conteudo');");
        
        }
        public function apaga(int $id):void{
            $result = $this->mysql->query("CALL sp_removeArtigo($id)");

        }


    }

?>