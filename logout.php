<?php
    session_start();
    if($_SESSION['nome']){
        //DELETA TODO DADO ASSOCIADO COM O USUARIO
         session_destroy();
         header('Location:login.php');
     }
?>