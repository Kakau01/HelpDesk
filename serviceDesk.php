<?php
       session_start();    
     
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
        #icon-back{
            display:none;
        }
        #logout{
            display:none;
        }
        #icon-add{
           display:block;
        }  
        #txt-logged-user{
            display:none;
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
                <div class="menu-sd"><a href="">Tickets closed</a></div>                    <div class="menu-sd"><a href="">Tickets older than 3 days</a> </div>
                <div class="menu-sd"><a href="">Tickets open today</a> </div>
                <div class="menu-sd"><a href="">Tickets closed today</a> </div>
            </div>
            <div id="bx-sd-right">
                <div id="tickets-sd" class="d-flex flex-column justify-content-between">
                    <div id="header-sd">
                        <div id="tickets-sd-header-one" class="d-flex" >
                            <p class="zerar-margin">Ticket ID:</p>
                            <p class="zerar-margin">Created by:</p>
                            <p class="zerar-margin">Priority:</p>
                            <p class="zerar-margin">Created date:</p>
                        </div>
                        <div id="tickets-sd-header-two" class="d-flex">
                            <p class="zerar-margin">1</p>
                            <p class="zerar-margin">Steven Smith</p>
                            <p class="zerar-margin">High</p>
                            <p class="zerar-margin">04/18/2016</p>
                        </div>
                    </div>
                    <div id="tickets-sd-problem" class="text-justify ">
                        <h5>Wifi isn't working</h5>
                        <p>The wireless network seems to be down in Building 1. Can´t access web, intranet or email.</p>
                    </div>
                    <div class="text-justify" id="teste2">
                        <p class="zerar-margin">Assign to: None</p>
                    </div>
                </div>
                <div id="tickets-sd" class="d-flex flex-column justify-content-between">
                    <div id="header-sd">
                        <div id="tickets-sd-header-one" class="d-flex" >
                            <p class="zerar-margin">Ticket ID:</p>
                            <p class="zerar-margin">Created by:</p>
                            <p class="zerar-margin">Priority:</p>
                            <p class="zerar-margin">Created date:</p>
                        </div>
                        <div id="tickets-sd-header-two" class="d-flex">
                            <p class="zerar-margin">1</p>
                            <p class="zerar-margin">Steven Smith</p>
                            <p class="zerar-margin">High</p>
                            <p class="zerar-margin">04/18/2016</p>
                        </div>
                    </div>
                    <div id="tickets-sd-problem" class="text-justify ">
                        <h5>Wifi isn't working</h5>
                        <p>The wireless network seems to be down in Building 1. Can´t access web, intranet or email.</p>
                    </div>
                    <div class="text-justify" id="teste2">
                        <p class="zerar-margin">Assign to: None</p>
                    </div>
                </div>
                <div id="tickets-sd" class="d-flex flex-column justify-content-between">
                    <div id="header-sd">
                        <div id="tickets-sd-header-one" class="d-flex" >
                            <p class="zerar-margin">Ticket ID:</p>
                            <p class="zerar-margin">Created by:</p>
                            <p class="zerar-margin">Priority:</p>
                            <p class="zerar-margin">Created date:</p>
                        </div>
                        <div id="tickets-sd-header-two" class="d-flex">
                            <p class="zerar-margin">1</p>
                            <p class="zerar-margin">Steven Smith</p>
                            <p class="zerar-margin">High</p>
                            <p class="zerar-margin">04/18/2016</p>
                        </div>
                    </div>
                    <div id="tickets-sd-problem" class="text-justify ">
                        <h5>Wifi isn't working</h5>
                        <p>The wireless network seems to be down in Building 1. Can´t access web, intranet or email.</p>
                    </div>
                    <div class="text-justify" id="teste2">
                        <p class="zerar-margin">Assign to: None</p>
                    </div>
                </div>
                
            </div>   
                     
        </div>  
    </main>
    

  
</body>
</html>