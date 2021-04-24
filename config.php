<?php
$mysql = new mysqli('localhost','root','','postit');
$mysql->set_charset('utf8');
if($mysql == false){
    echo 'Banco não está funcionando';
}

