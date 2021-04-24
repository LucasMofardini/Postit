<?php
$mysql = new mysqli('localhost','root','awsmysql1','postit');
$mysql->set_charset('utf8');
if($mysql == false){
    echo 'Banco não está funcionando';
}

