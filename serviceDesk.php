<?php
       session_start(); 
       include_once('connection.php');
       $email = $_SESSION['email'];

       $select_tk ="SELECT * FROM TB_ticket INNER JOIN TB_Usuario  ON TB_Usuario.Id_Usuario = TB_ticket.Id_Usuario WHERE Email ='$email';
       ";
       $result = mysqli_query($connect, $select_tk); 
       
       
       
     
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Desk</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
    #icon-back {
        display: none;
    }

    #logout {
        display: none;
    }

    #icon-add {
        display: block;
    }

    #txt-logged-user {
        display: none;
    }
    </style>
</head>

<body>
    <?php 
        //the varibles need to be before the include
        $title = "Service Desk";
        $user = $_SESSION['nome'];    
        include_once('include/header.php');        
    ?>
    <div>
        <?php include_once("include/ticketCounter.php");?>
    </div>
    <main id="bx-service-desk">
        <div id="bx-menu-mobile">
            <select name="" id="menu-mobile">
                <option value="">All Tickets</option>
                <option value="">New Tickets</option>
                <option value="">Tickets in Progress</option>
                <option value="">Tickets on hold</option>
                <option value="">Tickets closed</option>
                <option value="">Tickets older than 3 days</option>
                <option value="">Tickets open today</option>
                <option value="">Tickets closed today/option>
            </select>
        </div>
        <div class="d-flex" id="service-desk">
            <div id="bx-sd-left">
                <div class="menu-sd"><a href="">All tickets</a> </div>
                <div class="menu-sd"><a href=""> New tickets</a></div>
                <div class="menu-sd"><a href="">Tickets in progress</a> </div>
                <div class="menu-sd"><a href="">Tickets on hold</a></div>
                <div class="menu-sd"><a href="">Tickets closed</a></div>
                <div class="menu-sd"><a href="">Tickets older than 3 days</a> </div>
                <div class="menu-sd"><a href="">Tickets open today</a> </div>
                <div class="menu-sd"><a href="">Tickets closed today</a> </div>
            </div>
            <div id="bx-sd-right">
            <?php  while($row = mysqli_fetch_assoc($result)){ ?>

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
                        <div id="bx-sd-descript"><p class="text-break zerar-margin"><?php echo $row['Description_ticket']; ?></p></div>
                        
                    </div>
                    <div id="answer-problem" class="text-justify">
                        <p class="zerar-margin text-break">RESPOSTA:</p>
                    </div>
                    <div class="row" id="teste2">
                        <div class='col-6'>
                            <p class="zerar-margin">Assign to: None</p>
                        </div>
                        <div class='col-6 text-right'>
                            <a id="icon-edit" href="ticketDetails.php?id_ticket=<?php echo $row['Id_ticket'];?>"><i class="fa fa-edit fa-2x"></i></a>
                        </div>
                        
                    </div>
                </div>
            <?php } ?>
            </div>

        </div>
    </main>



</body>

</html>