<?php

session_start();

// print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senhal']))
{
    // Aceptará
    include_once('config.php');
    $email = $_POST['email'];
    $senhal = $_POST['senhal'];

    // print_r($email);
    // print_r($senhal);

    $sql = "SELECT * FROM tulis WHERE email = '$email' and senha = '$senhal'";
    $result = $conexao->query($sql);

    // print_r($result);

    if(mysqli_num_rows($result) < 1)
    {
        // print_r("Cad não encontrado veyr...");
        unset($_SESSION['email']);
        unset($_SESSION['senhal']);
        header('Location: /ofctulipas/frontend/_prelogin/a_loguinho_wrong.html');
    }
    else
    {
        // print_r("Pod passarr negah...");
        $_SESSION['email'] = $email;
        $_SESSION['senhal'] = $senhal;
        header('Location: /ofctulipas/frontend/_aposlogin/_logado.php');
    }
}
else
{
    header('Location: /ofctulipas/frontend/_prelogin/a_loguinho_wrong.html');
}


?>