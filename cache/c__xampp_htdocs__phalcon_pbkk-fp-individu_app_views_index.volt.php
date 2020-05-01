<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php 
            echo $this->tag->getTitle();
            echo $this->tag->stylesheetLink('css/bootstrap.min.css');
            echo $this->tag->stylesheetLink('css/font-awesome.min.css');
        ?>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->url->get('/img/favicon.ico')?>"/>
    </head>
    <body style="background-color: #ecdfc8; font-family:Roboto;">
        <!-- Header -->
        <!-- Navbar -->
        
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #df7841;">
            
            <a class="navbar-brand" href="#">Sistem Informasi Administrasi Hotel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav mr-auto mt-2 mt-lg-0"></div>
                <form class="form-inline my-2 my-lg-0">
                    <?php
                        # Check User Login
                        if ($this->session->has('IS_LOGIN'))
                        {
                            echo $this->tag->linkTo([
                                "user/profile",
                                '<i class="fa fa-user" aria-hidden="true"></i> Profile',
                                "class" => "btn btn-light"
                            ]);

                            echo "&nbsp;";

                            echo $this->tag->linkTo([
                                "user/logout",
                                '<i class="fa fa-sign-out" aria-hidden="true"></i> Logout',
                                "class" => "btn btn-danger"
                            ]);


                        } else 
                        {
                            echo $this->tag->linkTo([
                                "user/login",
                                '<i class="fa fa-sign-in" aria-hidden="true"></i> Login',
                                "class" => "btn btn-light"
                            ]);
                            echo "&nbsp;";
    
                            echo $this->tag->linkTo([
                                "user/register",
                                '<i class="fa fa-user-plus" aria-hidden="true"></i> Register',
                                "class" => "btn btn-outline-light"
                            ]);
                        }
                    ?>
                </form>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fcf8e8;">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <?= $this->tag->linkTo(["", '<i aria-hidden="true"></i> Beranda <span class="sr-only">(current)</span>', "class" => "nav-link"]); ?>
                    </li>
                    <li class="nav-item active">
                        <?= $this->tag->linkTo(["kamar", '<i aria-hidden="true"></i> Kamar <span class="sr-only">(current)</span>', "class" => "nav-link"]); ?>
                    </li>
                    <li class="nav-item active dropdown">
                        <?php if ($this->session->has('IS_LOGIN')) : ?>
                            <a id='navbarDropdown' class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Reservasi <span class="caret"></span>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <?= $this->tag->linkTo(["reservation/checkin", '<i  aria-hidden="true"></i> Check-In <span class="sr-only">(current)</span>', "class" => "nav-link"]); ?>
                                <?= $this->tag->linkTo(["reservation/bayar", '<i aria-hidden="true"></i> Pembayaran Pemesanan <span class="sr-only">(current)</span>', "class" => "nav-link"]); ?>    
                                <?= $this->tag->linkTo(["reservation/komentar", '<i aria-hidden="true"></i> Pemberian Komentar <span class="sr-only">(current)</span>', "class" => "nav-link"]); ?>    
                                <?= $this->tag->linkTo(["reservation/checkout", '<i aria-hidden="true"></i> Check-Out <span class="sr-only">(current)</span>', "class" => "nav-link"]); ?>    
                            </div>
                        <?php endif; ?>
                        
                    </li>
                    <li class="nav-item active">
                        <?php
                            # Check User Login
                            if ($this->session->has('IS_LOGIN'))
                            {
                                echo $this->tag->linkTo([
                                    "reservation/tamu", 
                                    '<i aria-hidden="true"></i> Data Tamu', 
                                    "class" => "nav-link"]
                                );
                            }
                        ?>
                    </li>
                </ul>
            </div>
        </nav>
        <br>
        <!-- Main Content -->
        <?php echo $this->getContent(); ?>
        <!-- Footer -->
        <?php
            echo $this->tag->javascriptInclude('js/jquery-3.3.1.slim.min.js');
            echo $this->tag->javascriptInclude('js/popper.min.js');
            echo $this->tag->javascriptInclude('js/bootstrap.min.js');
        ?>
        
    </body>
</html>
