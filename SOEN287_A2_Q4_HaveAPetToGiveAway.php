<?php
    session_start(); //starts all the sessions  
    if(!isset($_SESSION['username'])){
        header('location:SOEN287_A4_Q3_LogIn.php'); // redirect to login page if user details is not set in sessions    
    } 
    if(isset($_GET['logout'])){
        session_destroy();
        header('location:SOEN287_A4_Q3_LogIn.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href="SOEN287_A2_Q4_HaveAPetToGiveAway.css" rel="stylesheet" type="text/css">
<title>Giveaway Pet</title>
<style>
#out {
  background-color: black;
  overflow: hidden;
  position: fixed;
  bottom: 50px;
  left: 14%;
}
#out a {
  color:white;
  text-align:center;
  padding: 15px;
  text-decoration:none;
  font-size:15px;
}
#out a:hover{
    color:rgb(21, 184, 184);
        border-radius:5px;
        box-shadow: 0 0 5px #33ffff,
                    0 0 5px #66ffff;
}
</style>

<script src="HaveAPetToGiveAway.js"></script>
</head>
<body>
<?php
    include 'header.php';
    ?>
    <div class="content">
        <form id="form" action="" method="POST">
        <div class="form-control">
            <label>
                Cat or dog:
            </label>
            <label>
                <input type="radio"
                       id="cat"
                       name="pet" value="cat">Cat</input>
            </label>
            <label>
                <input type="radio"
                       id="dog"
                       name="pet" value="dog">Dog</input>
            </label>
        </div>
        <div class="form-control">
            <label for="breed" id="label-breed">
                Breed of dog or cat:
            </label>
            <select name="breed" id="breed">
                <option value="selectoption">---Please select---</option>
                <option value="Bulldog">Bulldog</option>
                <option value="German Shepard">German Shepard</option>
                <option value="Golden Retriever">Golden Retriever</option>
                <option value="Pug">Pug</option>
                <option value="Persian Cat">Persian Cat</option>
                <option value="Bengal cat">Bengal cat</option>
                <option value="Sphynx cat">Sphynx cat</option>
                <option value="British cat">British cat</option>
                <option value="Mix breed">Mix breed</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="form-control">
            <label for="age" id="label-age">
                Age range:
            </label>
            <select name="age_range" id="agerange">
                <option value="selectoption">---Please select---</option>
                <option value="less than a year">less than a year</option>
                <option value="1 to 2 years">1 to 2 years</option>
                <option value="3 to 5 years">3 to 5 years</option>
                <option value="6 years and plus">6 years and plus</option>
            </select>
        </div>
        <div class="form-control">
            <label>
                Gender:
            </label>
            <label>
                <input type="radio"
                       id="male"
                       name="gender" value="Male">Male</input>
            </label>
            <label>
                <input type="radio"
                       id="female"
                       name="gender" value="Female">Female</input>
            </label>
            </div>
            <div class="form-control">
                <label>Check the boxes that corresponds to your pet:</label>
                <label><i>Gets along with other dogs?</i></label>
                    <input type="radio" id="option1" name="option1" value="Yes">Yes</input>
                    <input type="radio" id="option1" name="option1" value="No">No</input>
                    <br><br>
                <label><i>Gets along with other cats?</i></label>
                    <input type="radio" id="option1" name="option2" value="Yes">Yes</input>
                    <input type="radio" id="option1" name="option2" value="No">No</input>
                    <br><br>
                <label><i>Suitable for a family with small children?</i></label>
                    <input type="radio" id="option1" name="option3" value="Yes">Yes</input>
                    <input type="radio" id="option1" name="option3" value="No">No</input>
                </div>

                <div class="form-control">
                    <label for="comment">
                        Something you would like us to know about?
                    </label>
                    <textarea name="comment" id="comment" placeholder="Text goes here..."></textarea>
                </div>
                <div class="form-control">
                    <label for="name" id="label-name">
                        Current owner's first and last name:
                    </label>
        
                    <input type="text" id="name" name="fullName" placeholder="Text goes here..." />
                </div>
           
                <div class="form-control">
                    <label for="email" id="label-email">
                        Current owner's email:
                    </label>
        
                    <input type="email" id="email" name="email" pattern="[a-zA-Z0-9!#$&'*/._%+-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-]{2,3}$"
                           placeholder="Text goes here..." />
                </div>
                <div id="error"></div>
            <button type="submit" name="submit" value="submit" onclick="myfunctions()">
                Submit
            </button>
            <button type="clear" value="clear">
                Clear
            </button>
        </form>
            <div class="button">
            <a href="#top" style="float:right";>Back to the top</a>
            </div>
            <div class="button" id="out"  >
            <a  href="?logout" style="float:left";>Logout</a>
            </div>


        <?php
        $count=0;
        if(array_key_exists('submit', $_POST)) {
            sendData();
        }
        function sendData(){
            if (isset($_POST['submit'])){
                $type = $_POST['pet'];
                $breed = $_POST['breed'];
                $age = $_POST['age_range'];
                $gender = $_POST['gender'];
                $info1 = $_POST['option1'];
                $info2 = $_POST['option2'];
                $info3 = $_POST['option3'];
                $comment = $_POST['comment'];
                $name = $_POST['fullName'];
                $email = $_POST['email'];
                $username = $_SESSION['username'];
                $file = fopen('AvailablePetInformation.txt','a');
                $line=count(file('AvailablePetInformation.txt'));
                while($count<$line){
                    $count++;
                }
                $fullInfo = $count . ":" . $username . ":" . $type . ":" . $breed . ":" . $age . ":" . $gender . ":" . $info1 . ":" . $info2 . ":" . $info3 . ":" . $comment . ":" . $name . ":" . $email . "\n"; 
                
                fwrite($file,$fullInfo);
                
                fclose($file);
                }
            }
        


        ?>
    </div>
    <br><br><br>
    <?php
    include 'footer.php';
    ?>

</body>
</html>