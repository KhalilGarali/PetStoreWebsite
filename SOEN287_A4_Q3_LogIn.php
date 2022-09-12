<?php

      function validateStudent($username, $pwd)
      {
          $found = false;
          $fh = fopen('login.txt', 'r');
          while(($line = fgetcsv($fh, null, ':')) != false) {
              if(count($line) > 1) {
                  if($line[0] == $username and $line[1] == $pwd) {
                      $found = true;
                      break;
                  }
              }
          }
          return $found;
      }

      if(isset($_POST['username'])&& isset($_POST['pwd'])){
        if(validateStudent($_POST['username'],$_POST['pwd'])=== false){
        echo "<script> alert('You have entered the wrong username or password. Please try again.')</script>";
        }
        else{
        session_start();
        $_SESSION["username"]= $_POST['username'];
        echo "<script>location.href='SOEN287_A2_Q4_HaveAPetToGiveAway.php'</script>";
    }
}


    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href="SOEN287_A4_Q3_CreateAnAccount.css" rel="stylesheet" type="text/css">
<title>Login</title>

<script src="ContactUs.js"></script>

</head>
<body>
<?php
    include 'header.php';
    ?>
    <div class="content">
    <form action="" method="POST">
            <div class="box">
                <h1>Login Form</h1>
                <input class="username" name="username" type="text" placeholder="User Name" pattern="[a-zA-Z0-9]+" required title="A username can contain letters (both upper and lower
                        case) and digits only.">
                <input class="username" name="pwd" type="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-zA-Z]).{4,}" required title="A password must be at least 4 characters long
                        (characters are to be letters and digits only), have at least one letter and at least one digit.">
                    <button class="button" type="submit" name="submit" value="submit">Login</button>
               
            </div>
        </form>
    
    </div>

    <?php
    include 'footer.php';
    
    ?>

</body>
</html>