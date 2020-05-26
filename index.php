<?php
       session_start();    
       $email = $_SESSION['email'] ;
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Ticket</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        #icon-back{
            display:none;
        }
        #icon-add{
            display:none;
        }   
        #logout{
            display:block;
        } 
        #txt-logged-user{
            display:block;
        }     
    </style>
</head>

<body>
    <?php 
        //the varibles need to be before the include
        $title = "Create New Ticket";
        $user = $_SESSION['nome'];    
        include_once('include/header.php');        
    ?>
    <div>
        <?php include_once("include/ticketCounter.php");?>
    </div>
    <main id="bx-main-index" class="container-fluid">
     <form action="newTicketValidation.php" method="post" class="row" id="form-index">
        <div id="bx-left-index" class="col-12 col-sm-5 col-md-4 col-lg-4 align-items-center">
            <div class="">
                <label class="col-12 col-sm-12 p-0" for="">Created by*</label>
                <input class="col-12 col-sm-12 " type="text" name="input-create-name" id="input-create-name">
            </div>
            <div class="">
               <label class="col-12 col-sm-12  p-0" for="inpt-priority">Priority*</label>
                <select name="priority" id="inpt-priority" class="col-12 col-sm-12 " required> 
                    <option value="" disabled selected>Choose Your Priority</option>
                    <!-- <option disabled selected>Choose your Priority</option> -->
                    <option value="High">High</option>
                    <option value="Medium">Medium</option>
                    <option value="Low">Low</option>
                </select>             
            </div>
            <div class="">
                <label class="col-12 col-sm-12  p-0" for="inpt-area">Area*</label>
                <select name="area" id="inpt-area" class="col-12 col-sm-12 " required>
                    <option value="" disabled selected>Choose your Area</option>
                    <option value="area1">Area 1</option>
                    <option value="area2">Area 2</option>
                    <option value="area3">Area 3</option>
                </select>
            </div>
        </div>
        <div id="bx-right-index"  class="col-12 col-sm-7 col-md-8 col-lg-8">
            <div class="">
                <label class="col-12 p-0" for="inpt-subject">Subject*</label>
                <input type="text" name="inpt-subject" id="inpt-subject" class="col-12" required>
            </div>
           <div class="" >
                <label class="col-12 p-0" for="txt-area-index">Description*</label>
                <textarea name="inpt-description" id="txt-area-index" maxlength="500" cols="30" rows="4" class="col-12" required></textarea>
           </div>
           <input type="hidden" name="status" value="new">
           <input type="hidden" name="admin_name" value="Aberto">
           <input type="hidden" name="admin_resposta" value="sem_resposta">


            
        </div >
        <div  class=" zerar-padding col-12 align-self-bottom d-flex flex-column justify-content-end " id="btn-index">
            <button class=""  id="btn-i">Create New Ticket</button>
        </div>
        
        

       
     </form>
    </main>

  
</body>
</html>