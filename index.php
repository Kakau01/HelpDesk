<?php
       session_start();    
     
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
     <form action="" class="row" id="form-index">
        <div id="bx-left-index" class="col-12 col-sm-5 col-md-4 col-lg-4 align-items-center">
            <div class="">
                <label class="col-12 col-sm-12 p-0">Created by*</label>
                <input class="col-12 col-sm-12 " type="text">
            </div>
            <div class="">
               <label class="col-12 col-sm-12  p-0">Priority*</label>
                <select name="" id=""class="col-12 col-sm-12 "> 
                    <option value=""></option>
                </select>             
            </div>
            <div class="">
                <label class="col-12 col-sm-12  p-0">Area*</label>
                <select name="" id="" class="col-12 col-sm-12 ">
                    <option value=""></option>
                </select>
            </div>
        </div>
        <div id="bx-right-index"  class="col-12 col-sm-7 col-md-8 col-lg-8">
            <div class="">
                <label class="col-12 p-0">Subject*</label>
                <input type="text" class="col-12">
            </div>
           <div class="" >
                <label class="col-12 p-0">Description*</label>
                <textarea name="" id="txt-area-index" cols="30" rows="4" class="col-12"></textarea>
           </div>
            
        </div >
        <div  class=" zerar-padding col-12 align-self-bottom d-flex flex-column justify-content-end " id="btn-index">
            <button class=""  id="btn-i">Create New Ticket</button>
        </div>
        
        

       
     </form>
    </main>

  
</body>
</html>