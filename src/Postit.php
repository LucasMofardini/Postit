<?php 

class Postit{
    private $mysql;

    public function __construct(mysqli $mysql){
    $this->mysql = $mysql;
    }
    public function exibirTodos():array{
        $resultado = $this->mysql->query('SELECT id, titulo, conteudo FROM artigo');
        $artigo = $resultado->fetch_all(MYSQLI_ASSOC);
        return $artigo;
        
    }
}