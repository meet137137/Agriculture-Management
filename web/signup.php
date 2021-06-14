<?php
    require "instrument.php";
?>

<main>
<section id="contact" style="width:35%;margin-left:34%">
<div class="container">
  <h1>Signup</h1>
  <?php
    if(isset($_GET['error'])){
        if($_GET['error']=="emptyfields"){
            echo '<p style="color:red!important;width:60%;text-align:center;margin-left:20%">Fill in all fields!</p>';
        }
        elseif ($_GET['error']=="invaliduidmail") {
            echo '<p style="color:red!important;width:60%;text-align:center;margin-left:20%">Invalid username and e-mail!</p>';
        }
        elseif($_GET['error']=="usertaken"){
            echo '<p style="color:red!important;width:60%;text-align:center;margin-left:20%">User already exits</p>';
        }
    }
    else if(isset($_GET['signup'])){
        if($_GET['signup']=="success"){
            echo '<p style="color:green!important;width:60%;text-align:center;margin-left:20%">Signup Successfully!</p>';
        }
    }
  
  ?>
<div class="contact-form1" style="padding:15px;">
    <form action="includes/signup.inc.php" method="post">
    <div class="form-group"><input type="text" name="uid" placeholder="Username" class="form-control" style="width:60%;text-align:center;margin-left:20%"></div>
    <div class="form-group"><input type="text" name="mail" placeholder="E-mail" class="form-control" style="width:60%;text-align:center;margin-left:20%"></div>
    <div class="form-group"><input type="password" name="pwd" placeholder="Password" class="form-control" style="width:60%;text-align:center;margin-left:20%"></div>
    <div class="form-group"><input type="password" name="pwd-repeat" placeholder="Repeat Password" class="form-control" style="width:60%;text-align:center;margin-left:20%"></div>
    <div class="form-group"><button type="submit" name="signup-submit"  style="width:25%;height:50px;margin-left:37.5%;background:#3380ff;color:#fff;border:0;border-radius:0" >Signup</button></div>

    </form>
    </div>
    </div>
</section>
</main>
