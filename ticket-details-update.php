<?php
    session_start();
    include_once("connection.php");
    $email = $_SESSION['email'];
    $statusUpdate = $_POST['status'];
    // echo $statusUpdate;
    $ticket_id = $_SESSION['ticket_id'];
    $admin_name =  $_POST['admin_name'];
    $admin_resposta =  $_POST['admin_resposta'];

    


    // $selectDB = "SELECT * FROM TB_Usuario INNER JOIN TB_ticket ON TB_Usuario.Id_Usuario = TB_ticket.Id_Usuario WHERE Email = '$email'";
    // $query = $connect->query($selectDB);
    // $result = $query->fetch_assoc();
    // $ticket_id = $result['Id_ticket'];
    // echo $ticket_id;


    // echo $result['Email'];

    $updateBD = "UPDATE TB_ticket set Status_Ticket = '$statusUpdate', Admin_name = '$admin_name', Admin_resposta = '$admin_resposta' WHERE Id_ticket = '$ticket_id'";
    $result = $connect->query($updateBD);
    if($result){
        header('Location:serviceDesk.php');
    }else{
        echo "Problema na conexao";
    }


?>