<?php
       session_start(); 
       include_once('connection.php');   
       $ticket_id = $_GET['id_ticket'];
       $email = $_SESSION['email'];
       
        //echo $ticket_id;
        $selectDB = "SELECT * FROM TB_ticket INNER JOIN TB_Usuario  ON TB_Usuario.Id_Usuario = TB_ticket.Id_Usuario WHERE Email = '$email'AND Id_Ticket = '$ticket_id'";
        $consultingDB= $connect->query($selectDB);
        $result = $consultingDB->fetch_assoc();
       
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
    <style>
    #icon-back {
        display: block;
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
                <div id="cx-1" class="col-12 col-sm-4 col-md-3 col-lg-3">
                    <div class="row align-items-center" id="caixa-tickets-detalhes">
                        <div class="col-3 col-sm-12 text-center" id="i1">
                            <p class="titulo-ticket-detalhe">Ticket ID</p>
                            <p class="valor-ticket-detalhe"><?php echo $result['Id_ticket']; ?></p>
                        </div>
                        <div class="col-3 col-sm-12 text-center" id="i2">
                            <p class="titulo-ticket-detalhe">Created date</p>
                            <p class="valor-ticket-detalhe"><?php echo $result['Data_ticket']; ?></p>
                        </div>
                        <div class="col-3 col-sm-12 text-center" id="i3">
                            <p class="titulo-ticket-detalhe">Closed date</p>
                            <p class="valor-ticket-detalhe">--</p>
                        </div>
                        <div class="col-3 col-sm-12 text-center" id="i4">
                            <p class="titulo-ticket-detalhe">Created by</p>
                            <p class="valor-ticket-detalhe"><?php echo $result['Created_by']; ?></p>
                        </div>
                    </div>
                </div>
                <div id="cx-2" class="col-12 col-sm-8 col-md-9 col-lg-9">
                    <form action="ticket-details-update.php" method="post" id="caixa-conteudo-2"
                        class="d-flex flex-column justify-content-around">
                        <div class="d-flex flex-column tamanho-texto ">
                            <label for="">Subject</label>
                            <input type="text" value="<?php echo $result['Subject_ticket'] ?>" disabled>
                        </div>

                        <div class="d-flex flex-column tamanho-texto ">
                            <label for="">Description</label>
                            <textarea name="" id="text-area-td" cols="30" rows="4" disabled>
                            <?php echo $result['Description_ticket']; ?>
                        </textarea>
                        </div>
                        <div class="d-flex flex-column tamanho-texto">
                            <label for="">Internal Comments</label>
                            <input type="text" required>
                        </div>

                        <div class="row tamanho-texto borda">
                            <div class="col-6">
                                <p>Ticket Status</p>
                            </div>
                            <div class="col-6">
                               <select name="status" id="inpt-status" required>
                                <option value="" disabled selected>New</option>
                                <!-- <option disabled selected>Choose your Priority</option> -->
                                <option value="Closed">Closed</option>
                                <option value="InProgress">In Progress</option>
                              
                            </select> 
                            </div>
                            
                        </div>
                        <div class="row tamanho-texto borda">
                            <div class="col-6">
                                <p>Assigned to</p>
                            </div>
                            <div class="col-6">
                                <input type="text" required>
                            </div>
                            
                            
                        </div>
                        <div class="row tamanho-texto borda">
                            
                            <div class="col-6">
                                <p>Area</p>
                            </div>
                            <div class="col-6">
                                <input type="text" name="" id="" value="<?php echo $result['Area_ticket']; ?>" disabled>
                            </div>
                        </div>
                        <div class="row tamanho-texto borda">
                            
                            <div class="col-6">
                                <p>Priority</p>
                            </div>
                            <div class="col-6">
                                <input type="text" name="" id="" value="<?php echo $result['Priority_ticket'] ?>">
                            </div>
                        </div>



                        <div class="d-flex flex-column">
                            <button id="botao">Botao</button>
                        </div>


                    </form>
                </div>
        </main>
</body>

</html>