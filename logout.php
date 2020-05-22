<?php
    session_start();
    if(isset($_SESSION['email'])){
        //DELETA TODO DADO ASSOCIADO COM O USUARIO
        session_destroy();
        header('Location:login.php');
     }else{

        header('Location:login.php');

     }
?>