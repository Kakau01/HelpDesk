<?php
    include_once("connection.php");
    session_start();
    //Get the information that the user insert in the input field
    $inputEmail = $_POST['input-email'];
    $inputPass =$_POST['input-pass'];
    
    //Consulting DB e getting Values.
    $dbValues = "SELECT * FROM TB_Usuario WHERE Email='$inputEmail' AND Senha='$inputPass'";
    $consultingDB= $connect->query($dbValues);
    $result = $consultingDB->fetch_assoc();
    
    //If the array resul is different than Null
    if($result !== NULL){
        $nome = $result['Nome'];
        $email = $result['Email'];
        $pass = $result['Senha'];
        if(($inputEmail === $email) && ($inputPass === $pass)){
                $_SESSION['nome'] = $nome;
                header('Location:index.php');
                
            }          
    }else{
        echo "
             <script type ='text/javascript'>
                alert('You have entered an invalid username or password!');
               window.location.href='login.php';
            </script>";
           
          
    }
    
    //* Another way of doing it */
    
    // $nome = isset($result['Nome']) ? $result['Nome'] : '';
    // $email = isset($result['Email']) ? $result['Email'] :'' ;
    // $pass = isset($result['Senha']) ? $result['Senha'] : '';

    // //Login Validation
    // if(($inputEmail === $email) && ($inputPass === $pass)){
    //     $_SESSION['nome'] = $nome;
    //     header('Location:newTicket.php');
        
    // }else{
  
    //     echo "
    //     <script type ='text/javascript'>
    //         alert('You have entered an invalid username or password!');
    //         window.location.href='login.php';
    //     </script>
    //     ";
    //  }
  
    

?>