<?php
       session_start();    
     
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
        #icon-back{
            display:block;
        }
        #logout{
            display:none;
        }
        #icon-add{
           display:none;
        }  
        #txt-logged-user{
            display:none;
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
                        <p class="valor-ticket-detalhe">1</p>
                    </div>
                    <div class="col-3 col-sm-12 text-center"  id="i2">
                        <p class="titulo-ticket-detalhe">Created date</p>
                        <p class="valor-ticket-detalhe">04/18/2016</p>
                    </div>
                    <div class="col-3 col-sm-12 text-center"  id="i3">
                        <p class="titulo-ticket-detalhe">Closed date</p>
                        <p class="valor-ticket-detalhe">--</p>
                    </div>
                    <div class="col-3 col-sm-12 text-center"  id="i4">
                        <p class="titulo-ticket-detalhe">Created by</p>
                        <p class="valor-ticket-detalhe">Steven Smith</p>
                    </div>
                </div>
            </div>
            <div id="cx-2" class="col-12 col-sm-8 col-md-9 col-lg-9">
                <form id="caixa-conteudo-2" class="d-flex flex-column justify-content-around">
                    <div class="d-flex flex-column tamanho-texto ">
                        <label for="">Subject</label>
                        <input type="text">
                    </div>
                    
                    <div class="d-flex flex-column tamanho-texto ">
                        <label for="">Description</label>
                        <input type="text">
                    </div>
                    <div class="d-flex flex-column tamanho-texto">
                        <label for="">Internal Comments</label>
                        <input type="text">
                    </div>
                    
                    <div class="row tamanho-texto borda">
                        <p class="col-4 text-left">Ticket Status</p>
                        <p class="col-4 text-center">InProgress</p>
                        <a class="col-4 text-right icon-td" href=""><i class="fa fa-angle-right"></i></a>         
                    </div>
                    <div class="row tamanho-texto borda">
                        <p class="col-4 text-left">Assigned to</p>
                        <p class="col-4 text-center">None</p>
                        <a class="col-4 text-right icon-td" href=""><i class="fa fa-angle-right"></i></a>         
                    </div>
                    <div class="row tamanho-texto borda">
                        <p class="col-4 text-left">Area</p>
                        <p class="col-4 text-center">IT</p>
                        <a class="col-4 text-right icon-td" href=""><i class="fa fa-angle-right"></i></a>         
                    </div>
                    <div class="row tamanho-texto borda">
                        <p class="col-4 text-left">Priority</p>
                        <p class="col-4 text-center">High</p>
                        <a class="col-4 text-right icon-td" href=""><i class="fa fa-angle-right"></i></a>         
                    </div>
                    
                    
                    
                    <div class="d-flex flex-column">
                        <button id="botao">Botao</button>
                    </div>
                    

                </form>
            </div>
    </main>
</body>
</html>