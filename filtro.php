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
    <div id="tickets-sd-problem" class=" ">
        <h6 id="ticket-title"><?php echo $row['Subject_ticket']; ?></h6>
        <textarea id="bx-sd-descript"  rows="2" class="text-break" reandoly><?php echo $row['Description_ticket']; ?>
        </textarea>

    </div>
    <div id="answer-problem" class="text-justify">
        <span id="resposta-txt" class='text-break'>RESPOSTA:</span><span class="txt-break" id="resposta-txt-sd"><?php echo $row['Admin_resposta'];?></span>
    </div>
    <div class="row" id="teste2">
        <div class='col-6'>
            <p class="zerar-margin"><span id="assign-to-txt">Assign to:</span> <?php echo $row['Admin_name']; ?></p>
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