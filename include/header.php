
<header id="bx-hd" class="d-flex align-items-center">
        <nav class="container-fluid d-flex align-items-center">
            <div id="hd-left" class="col-4 col-sm-4 col-md-4 col-lg-4 d-flex align-items-center zerar-padding">
                <a id="icon-back" class="icon-style" href="index.php"><i class="fa fa-arrow-circle-left fa-3x " title="Go back to Home Page"></i></a>
                <?php if(isset($user)){ ?>
                <span id="txt-logged-user">Welcome <?php echo $user ?></span>
            </div>
            <div id="hd-middle" class="col-4 col-sm-4 col-md-4 col-lg-4 text-center zerar-padding">
                <h3 id="hd-txt-title"><?php echo $title ?></h3>
            </div>
            <div id="hd-right" class="col-4 col-sm-4 col-md-4 col-lg-4 justify-content-end d-flex align-items-cente zerar-padding">
                <a href="serviceDesk.php" id="my-tickets">My Tickets</a>
                <a href="logout.php" id="logout">Logout</a>
                <a id="icon-add" title="Create new ticket" class="icon-style" href="index.php"><i class="fa fa-plus-circle fa-3x "></i></a>
                <?php } else {
                    header("Location:login.php");
                    } ?>
               
            </div>
        </nav>
</header>

