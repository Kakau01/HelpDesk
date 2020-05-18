<?php
    //Creating Connection with Data Base.
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "helpdesk";

    $connect = mysqli_connect($servername,$username,$password,$dbname);

    if(!$connect){
        die("Falha na Conexão!!".mysqli_connect_error());
    }else{
        //echo "Conectado com o Banco de Dados";
    }



?>