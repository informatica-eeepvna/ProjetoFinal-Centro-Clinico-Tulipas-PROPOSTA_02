<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'agendamentos';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// if($conexao->connect_errno)
// {
//    echo "Deu erro :(";
// }
// else
// {
//    echo "Certinhoo :)";
// }

?>