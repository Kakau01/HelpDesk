<?php 
include_once('connection.php');
$query = mysqli_query($connect,"SELECT * FROM TB_ticket INNER JOIN TB_Usuario ON TB_Usuario.Id_Usuario = TB_ticket.Id_Usuario WHERE Status_ticket = 'new' AND Email = '$email'") ;
$result_new = mysqli_num_rows($query);

$query2 = mysqli_query($connect,"SELECT * FROM TB_ticket INNER JOIN TB_Usuario ON TB_Usuario.Id_Usuario = TB_ticket.Id_Usuario WHERE Status_ticket = 'InProgress' AND Email = '$email'") ;
$result_progress = mysqli_num_rows($query2);

$query3 = mysqli_query($connect,"SELECT * FROM TB_ticket INNER JOIN TB_Usuario ON TB_Usuario.Id_Usuario = TB_ticket.Id_Usuario WHERE Status_ticket = 'Closed' AND Email = '$email'") ;
$result_closed = mysqli_num_rows($query3);

$query4 = mysqli_query($connect,"SELECT * FROM TB_ticket INNER JOIN TB_Usuario ON TB_Usuario.Id_Usuario = TB_ticket.Id_Usuario WHERE Email = '$email'") ;
$result_all = mysqli_num_rows($query4);
?>
<div class="container-fluid " id="bx-ticket-counter">
    <div class="row text-center justify-content-center align-items-center" id="bx-sub-ticket-counter">
        <div class="col-3 zerar-padding" id="bx-2-ticket-counter">
            <h5><?php echo $result_all; ?></h5>
            <p class="text-size-ticket-counter zerar-margin">All Tickets</p>
        </div>
        <div class="col-3 zerar-padding" id="bx-2-ticket-counter">
            <h5><?php echo $result_new; ?></h5>
            <p class="text-size-ticket-counter zerar-margin">New Tickets</p>
        </div>
        <div class="col-3 zerar-padding" id="bx-3-ticket-counter">
            <h5><?php echo $result_progress; ?></h5>
            <p class="text-size-ticket-counter zerar-margin">In Progress</p>
        </div>
        <div class="col-3 zerar-padding" id="bx-4-ticket-counter">
            <h5><?php echo $result_closed; ?></h5>
            <p class="text-size-ticket-counter zerar-margin">Tickets Closed</p>
        </div>

    </div>
</div>