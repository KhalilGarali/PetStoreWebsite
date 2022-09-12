<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href="SOEN287_A4_Q3_CreateAnAccount.css" rel="stylesheet" type="text/css">
<title>Create An Account</title>

<script src="ContactUs.js"></script>

</head>
<body>
<?php
    include 'header.php';
    ?>
    <div class="content">
    <form action="" method="POST">
            <div class="box">
                <h1>New Account Form</h1>
                <input class="username" name="username" type="text" placeholder="User Name" pattern="[a-zA-Z0-9]+" required title="A username can contain letters (both upper and lower
                        case) and digits only.">
                <input class="username" name="pwd" type="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-zA-Z]).{4,}" required title="A password must be at least 4 characters long
                        (characters are to be letters and digits only), have at least one letter and at least one digit.">
                    <button class="button" type="submit" name="submit" value="submit">Sign Up</button>
               
            </div>
        </form>
        <?php
         if(array_key_exists('submit', $_POST)) {
            buttonConfirm();
        }

        function buttonConfirm(){
        if (isset($_POST['submit'])) 
        {
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];
        $credentials = $username. ":" . $pwd . "\n";
        $file = fopen('login.txt','a');
        $content = explode(':',$credentials);
        //foreach($content as $value){
            $fileContent = file_get_contents("login.txt");
            if(strpos($fileContent, substr($credentials,0, strpos($credentials,':'))))
            {
               echo "<script>alert('User name already exists. Please choose another one!')</script>";
            }
            else{
            fwrite($file,$credentials);
            echo "Welcome <b>".$username."! </b>You have succesfully created your account! Login whenever you desire!";
            }
            fclose($file);
        }
    }
    
        
            
        //fwrite($file,$username.":");
        //fwrite($file,$pwd."\n");
       

        
    ?>
    </div>

    <?php
    include 'footer.php';
    ?>

</body>
</html>