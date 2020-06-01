<?php
    session_start();
    include_once("connection.php");
    $createdby = $_POST['input-create-name'];
    $priority = $_POST['priority'];
    $area = $_POST['area'];
    $subject = $_POST['inpt-subject'];
    $description = $_POST['inpt-description'];
    $email = $_SESSION['email'];
    $idUser= $_SESSION['idUser'];
    $status = $_POST['status'];
    $admin_name = $_POST['admin_name'];
    $admin_resposta = $_POST['admin_resposta'];

    // echo $admin_name;
    // echo $admin_resposta;

 
    $inserindo_tk = "INSERT INTO TB_ticket(Created_by,Priority_ticket,Area_ticket,Subject_ticket,Description_ticket,Status_ticket,Admin_name,Admin_Resposta,Closed_date,Id_Usuario) VALUES ('$createdby','$priority','$area','$subject','$description','$status','$admin_name','$admin_resposta','','$idUser')";
    $result_insert_tk = mysqli_query($connect, $inserindo_tk);

    header('Location:serviceDesk.php');

    
?>