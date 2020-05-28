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
            <form action="" id="form-filtro" method="post"></form>
                <select name="menu-mobile" id="menu-mobile">
                    <option value="" disabled selected>Choose your Option</option>
                    <option value="todos">Todos</option>
                    <option value="Closed">Closed</option>
                    <option value="InProgress">InProgress</option>
                    <option value="new">new</option>
                </select>
            </form>
        </div>
        <div id="bx-sd-right"></div>
       
    </main>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(function(){
            $("#menu-mobile").change(function(){
                var selecionado =  $("#menu-mobile").val();
                //enviando a variavel via post
                $.post('filtro.php', {selecionado: selecionado}, function(data){
                    $("#bx-sd-right").html(data);
                });
            });
        });
    </script>

</body>

</html>