<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"> 

</head>
<body class="d-flex justify-content-center align-items-center" id="bd-login">
    <main id="bx-main" class="rounded d-flex justify-content-center align-items-center">
        <form action="loginVerify.php" method="post" class="d-flex flex-column  align-items-center justify-content-center">
            <img class="mb-3 rounded" src="images/loginImg.png" width="70" height="70">
            <h2 class=" font-weight-normal mb-3">Please sign in</h2>
            <input class="input-login mb-2 mt-3 p-1" type="email"   name="input-email" placeholder="email@email.com" required autofocus>
            <input class="input-login p-1 m-3 mt-3" type="password" name="input-pass" placeholder="******" required autofocus>
            <button id="btn-signin" class="btn btn-block" type="submit">Sign In</button>
        </form>
        
    </main>

</body>
</html>