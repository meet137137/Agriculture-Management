<?php
    session_start();
?>
 <!doctype html>
  <html lang="en">
    <head>
    
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="instrument.css">
      <link rel="stylesheet" href="pop-up.css">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <title>AgriMart</title>
    </head>
    <body>
    <header>
        <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.html"><img src="pic/logo.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="instrument.html" id="navbarDropdown" role="button" style="color:rgb(45, 224, 21);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         AgriMart
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item"  href="secound.php"> Assistance schemes for farming</a>
                          <a class="dropdown-item" href="third.html">Horistical Crops</a>
                          <a class="dropdown-item" href="four.html">Animal & Fishers plan</a>
                          
                        </div>
                      </li>
                     
                    
                        <li class="nav-item">
                            <?php
                                if(isset($_SESSION['userId'])){
                                   echo ' <form action="includes/logout.inc.php" method="post">
                                   <button type="submit" name="logout-submit" class="btn-primary" style="border:0;border-radius:20px!important;width:100px;height:30px">Logout</button>
                               </form>';
                               }
                               else{
                                   echo ' <form action="includes/login.inc.php" method="post">
                                   <input type="text" name="mailuid" placeholder="Username/E-mail" style="border:0;border-radius:0!important">
                                   <input type="password" name="pwd" placeholder="Password" style="border:0;border-radius:0!important">
                                   <button type="submit" name="login-submit" class="btn-primary" style="border:0;border-radius:20px!important;width:100px;height:30px" >Login</button >
                                   <a type="button" class="btn-primary" href="signup.php" style="margin-left:10px;border:0;border-radius:20px!important;width:100px;height:30px;text-align:center" >Signup</a>
                               </form>'  ;
                               }
                            ?>
                          </li>
                          <input type="button" value="GO TO CART" class="btn-primary" style="margin-left:1cm;border:0;border-radius:20px;width:100px"  onclick="return gotocart()">
                  </ul>
                </div>
              </nav>
        </section><br>
       </header>
    <!--instrument view-->
    

    
  
  
