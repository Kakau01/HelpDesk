<?php
       session_start(); 
       include_once('connection.php');   
       $ticket_id = $_GET['id_ticket'];
       $email = $_SESSION['email'];
       
        //echo $ticket_id;
        $selectDB = "SELECT * FROM TB_ticket INNER JOIN TB_Usuario  ON TB_Usuario.Id_Usuario = TB_ticket.Id_Usuario WHERE Email = '$email'AND Id_Ticket = '$ticket_id'";
        $consultingDB= $connect->query($selectDB);
        $result = $consultingDB->fetch_assoc();
        $_SESSION['ticket_id'] = $ticket_id;
        // $dataFechamento = new DateTime();
        // $datetime = $dataFechamento->format('Y-m-d');

      
     
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="javascript/script.js"></script>
    <style>
    #icon-back {
        display: none;
    }

    #logout {
        display: none;
    }

    #icon-add {
        display: none;
    }

    #txt-logged-user {
        display: none;
    }

    #my-tickets {
        display: none;
    }
    </style>
</head>

<body>
    <?php
         $title = "Ticket Details";
         $user = $_SESSION['nome'];    
         include_once('include/header.php');  
       
        
    ?>
    <main>
        <main class="container-fluid" id="caixa-principal">
            <div class="row" id="caixa-sub-principal">
                <?php if(isset($result)){?>
                <div id="cx-1" class="col-12 col-sm-4 col-md-3 col-lg-2">
                    <div class="row align-items-center" id="caixa-tickets-detalhes">
                        <div class="col-6 col-sm-12 text-center" id="i1">
                            <p class="titulo-ticket-detalhe m-0">Ticket ID:</p>
                            <p class="valor-ticket-detalhe m-0"><?php echo $result['Id_ticket']; ?></p>
                        </div>
                        <div class="col-6 col-sm-12 text-center" id="i2">
                            <p class="titulo-ticket-detalhe m-0">Created date:</p>
                            <p class="valor-ticket-detalhe m-0"><?php echo $result['Data_ticket']; ?></p>
                        </div>
                        <div class="col-6 col-sm-12 text-center" id="i3">
                            <p class="titulo-ticket-detalhe m-0">Closed date:</p>
                            <p class="valor-ticket-detalhe m-0"><?= $result['Status_ticket'] === "Closed" ?  
                             $result['Closed_date'] :  ""; ?> 
                        </p>
                        </div>
                        <div class="col-6 col-sm-12 text-center" id="i4">
                            <p class="titulo-ticket-detalhe m-0">Created by:</p>
                            <p class="valor-ticket-detalhe m-0"><?php echo $result['Email']; ?></p>
                        </div>

                    </div>


                </div>
                <div id="cx-2" class="col-12 col-sm-8 col-md-9 col-lg-10">
                    <form action="ticket-details-update.php" method="post" id="caixa-conteudo-2"
                        class="d-flex flex-column justify-content-around">
                        <div class="d-flex flex-column tamanho-texto ">
                            <label for="">Subject</label>
                            <input type="text" class="pl-2" value="<?php echo $result['Subject_ticket'] ?>" disabled>
                        </div>

                        <div class="d-flex flex-column tamanho-texto">
                            <label for="">Description</label>
                            <textarea class="pl-2" name="" id="text-area-td" cols="30" rows="4"
                                disabled><?php echo $result['Description_ticket']; ?></textarea>
                        </div>
                        <div class="d-flex flex-column tamanho-texto">
                            <label for="">Internal Comments*</label>
                            <input class="pl-2" name="admin_resposta" id="admin_resposta" maxlength='80' type="text"
                                value="<?php echo $result['Admin_resposta']; ?> " required>
                        </div>

                        <div class="row tamanho-texto borda">
                            <div class="col-6">
                                <p>Ticket Status*</p>
                            </div>
                            <div class="col-6">
                                <select name="status" id="inpt-status" class="inpt-size pt-1 pb-1 pl-1" required>
                                    <option value="new"
                                        <?= $result['Status_ticket'] ==='new' ?  "selected='selected'" : '';?>>New
                                    </option>
                                    <option value="Closed"
                                        <?= $result['Status_ticket'] ==='Closed' ?  "selected='selected'" : '';?>>Closed
                                    </option>
                                    <option value="InProgress"
                                        <?= $result['Status_ticket'] ==='InProgress' ?  "selected='selected'" : '';?>>In
                                        Progress</option>


                                </select>
                            </div>

                        </div>
                        <div class="row tamanho-texto borda">
                            <div class="col-6">
                                <p>Assigned to*</p>
                            </div>
                            <div class="col-6">
                                <input class="inpt-size pl-1" name="admin_name" id="admin-name" type="text"
                                    value="<?php echo $result['Admin_name']; ?> " required>
                            </div>


                        </div>
                        <div class="row tamanho-texto borda">

                            <div class="col-6">
                                <p>Area</p>
                            </div>
                            <div class="col-6">
                                <input class="inpt-size pl-1" type="text" name="" id=""
                                    value="<?php echo $result['Area_ticket']; ?>" disabled>
                            </div>
                        </div>
                        <div class="row tamanho-texto borda">

                            <div class="col-6">
                                <p>Priority</p>
                            </div>
                            <div class="col-6">
                                <input class="inpt-size pl-1" type="text" name="" id=""
                                    value="<?php echo $result['Priority_ticket'] ?>" disabled>
                            </div>
                        </div>



                        <div class="row">
                            <button id="botao" class="col-12">Botao</button>
                        </div>


                    </form>

                </div>
                <?php }else{ echo header('Location:index.php'); }?>
            </div>
            <?php
            if($result['Status_ticket'] === "Closed"){
                echo  "<script>
                    $('#inpt-status').attr('disabled', true);
                    $('#admin-name').attr('disabled', true);
                    $('#admin_resposta').attr('disabled', true);
                    $('#botao').attr('disabled', true);
                    $('#botao').css('background-color', '#cccccc');



            </script>";
        }else{
            
        }
        ?>
        </main>
        <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="javascript/script.js"></script> -->
        <script>
        $(function() {

            $("#caixa-conteudo-2").submit(function(event) {
                var selec = $("#inpt-status").val();
                // alert(selec);
                // event.preventDefault();
                if (selec == "Closed") {

                    var confirmacao = confirm("Certeza que fechar o ticket?");
                    if (!confirmacao) {
                        event.preventDefault();
                    } else {




                    }

                }

            });
        });
        </script>

</body>

</html>