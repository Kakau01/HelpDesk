<?php
session_start();
    include_once("connection.php");
    $selecionado =  $_POST['selecionado'];
    $email  = $_SESSION['email'];
    
if($selecionado !== "todos"){
    $query = mysqli_query($connect,"SELECT * FROM TB_ticket INNER JOIN TB_Usuario ON TB_Usuario.Id_Usuario = TB_ticket.Id_Usuario WHERE Status_ticket = '$selecionado' AND Email = '$email'") ;
    $query2 = mysqli_num_rows($query);
}else{
    $query = mysqli_query($connect,"SELECT * FROM TB_ticket INNER JOIN TB_Usuario ON TB_Usuario.Id_Usuario = TB_ticket.Id_Usuario WHERE Email = '$email'") ;
    $query2 = mysqli_num_rows($query);
}
    
?>
<?php if($query2 > 0){?>
<?php while($row = mysqli_fetch_assoc($query)){?>

<div id="tickets-sd" class="d-flex flex-column justify-content-between">
    <div id="header-sd">
        <div id="tickets-sd-header-one" class="d-flex">
            <p class="zerar-margin">Ticket ID:</p>
            <p class="zerar-margin">Created by:</p>
            <p class="zerar-margin">Priority:</p>
            <p class="zerar-margin">Created date:</p>
        </div>
        <div id="tickets-sd-header-two" class="d-flex">
            <p class="zerar-margin"><?php echo $row['Id_ticket']; ?></p>
            <p class="zerar-margin"><?php echo $row['Created_by']; ?></p>
            <p class="zerar-margin"><?php echo $row['Priority_ticket']; ?></p>
            <p class="zerar-margin"><?php echo $row['Data_ticket']; ?></p>
        </div>
    </div>
    <div id="tickets-sd-problem" class="text-justify ">
        <h6><?php echo $row['Subject_ticket']; ?></h6>
        <div id="bx-sd-descript">
            <p class="text-break zerar-margin"><?php echo $row['Description_ticket']; ?></p>
        </div>

    </div>
    <div id="answer-problem" class="text-justify">
        <p class="zerar-margin text-break">RESPOSTA: <?php echo $row['Admin_resposta']; ?></p>
    </div>
    <div class="row" id="teste2">
        <div class='col-6'>
            <p class="zerar-margin">Assign to: <?php echo $row['Admin_name']; ?></p>
        </div>
        <div class='col-6 text-right'>
            <a id="icon-edit" href="ticketDetails.php?id_ticket=<?php echo $row['Id_ticket'];?>"><i
                    class="fa fa-edit fa-2x"></i></a>
        </div>

    </div>
</div>
<?php } ?>


<?php }else{ 
        echo "Você não possui nenhum ticket cadastrado! :(";
        ?>
<?php } ?>