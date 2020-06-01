<?php
    session_start();
    include_once("connection.php");
    $email = $_SESSION['email'];
    $statusUpdate = $_POST['status'];
    // echo $statusUpdate;
    $ticket_id = $_SESSION['ticket_id'];
    $admin_name =  $_POST['admin_name'];
    $admin_resposta =  $_POST['admin_resposta'];
    $status = $_POST['status'];

    
    // $dataFechamento = date('Y-m-d');
    // echo $dataFechamento; 
    // exit;
    // $datetime = $dataFechamento->format();
   

    // if($status === "Closed"){
    //     echo "Funcionou";
    // }else{
    //     echo "Não esta fechado!";
    // }

    // exit;


    


    // $selectDB = "SELECT * FROM TB_Usuario INNER JOIN TB_ticket ON TB_Usuario.Id_Usuario = TB_ticket.Id_Usuario WHERE Email = '$email'";
    // $query = $connect->query($selectDB);
    // $result = $query->fetch_assoc();
    // $ticket_id = $result['Id_ticket'];
    // echo $ticket_id;


    // echo $result['Email'];
    if($status === "Closed"){
        $updateBD = "UPDATE TB_ticket set Status_Ticket = '$statusUpdate', Admin_name = '$admin_name', Admin_resposta = '$admin_resposta', Closed_date = CURRENT_DATE() WHERE Id_ticket = '$ticket_id'";
        $result = $connect->query($updateBD);
        // echo "<script type='text/javascript' src='https://code.jquery.com/jquery-3.3.1.min.js'></script>";
        // echo "<script type='text/javascript' src='javascript/script.js>";
       
        header('Location:serviceDesk.php');


    }else{
        $updateBD = "UPDATE TB_ticket set Status_Ticket = '$statusUpdate', Admin_name = '$admin_name', Admin_resposta = '$admin_resposta' WHERE Id_ticket = '$ticket_id'";
        $result = $connect->query($updateBD);
        header('Location:serviceDesk.php');
    }
    


?>