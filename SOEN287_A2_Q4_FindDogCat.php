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
<link href="SOEN287_A2_Q4_FindDogCat.css" rel="stylesheet" type="text/css">
<title>Find a dog/cat</title>
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

<script src="FindDogCat.js">
</script>
</head>
<body>
    <p id="top"></p>
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
                       name="petType" value="cat">Cat</input>
            </label>
            <label>
                <input type="radio"
                       id="dog"
                       name="petType" value="dog">Dog</input>
            </label>
        </div>
        <div class="form-control">
            <label for="breed" id="label-breed">
                Breed of dog or cat:
            </label>
            <select name="breed" id="pet">
                <option value="selectoption">---Please select---</option>
                <option value="Bulldog">Bulldog</option>
                <option value="German Shepard">German Shepard</option>
                <option value="Golden Retriever">Golden Retriever</option>
                <option value="Pug">Pug</option>
                <option value="Persian Cat">Persian Cat</option>
                <option value="Bengal cat">Bengal cat</option>
                <option value="Sphynx cat">Sphynx cat</option>
                <option value="British cat">British cat</option>
                <option value="does not matter">Does not matter</option>
            </select>
        </div>
        <div class="form-control">
            <label for="age_range" id="label-age">
                Age range:
            </label>
            <select name="age_range" id="agerange">
                <option value="selectoption">---Please select---</option>
                <option value="less than a year">less than a year</option>
                <option value="1 to 2 years">1 to 2 years</option>
                <option value="3 to 5 years">3 to 5 years</option>
                <option value="6 years and plus">6 years and plus</option>
                <option value="does not matter">Does not matter</option>
            </select>
        </div>
        <div class="form-control">
            <label>
                Gender:
            </label>
            <label>
                <input type="radio"
                       id="male"
                       name="petGender" value="male">Male</input>
            </label>
            <label>
                <input type="radio"
                       id="female"
                       name="petGender" value="female">Female</input>
            </label>
            <label>
                <input type="radio"
                       id="anything"
                       name="petGender" value="does not matter">Does not matter</input>
            </label>
            </div>
            <div class="form-control">
                <label>
                    Does it need to get along with other pets and childern?
                </label>
                <label>
                    <input type="radio"
                           id="yes"
                           name="petAttitude" value="yes">Yes</input>
                </label>
                <label>
                    <input type="radio"
                           id="no"
                           name="petAttitude" value="no">No</input>
                </label>
                </div>
            <button type="submit" value="submit" name="submit" onclick="myfunctions()">
                Submit
            </button>
            <button type="clear" value="clear">
                Clear
            </button>
        </form>
            <div class="button" id="top">
            <a href="#top" style="float:right";>Back to the top</a>
            </div>
            <div class="button" id="out"  >
            <a  href="?logout" style="float:left";>Logout</a>
            </div>
    <?php
    function checkPet(){
    if (isset($_POST['submit'])) 
        {
    $type=$_POST['petType'];
    $breed=$_POST['breed'];
    $age=$_POST['age_range'];
    $gender=$_POST['petGender'];
    $attitude=$_POST['petAttitude'];
    if(($type=="cat")&&(($breed=="British cat")||($breed=="does not matter"))&&(($age=="1 to 2 years")||($age=="does not matter"))&&(($gender=="female")||($gender=="does not matter"))&&($attitude=="yes")){
        echo "<script>location.href='SOEN287_A4_Q3_cat2.php'</script>";
        }
        else if(($type=="cat")&&(($breed=="Bengal cat")||($breed=="does not matter"))&&(($age=="less than a year")||($age=="does not matter"))&&(($gender=="male")||($age=="does not matter"))&&($attitude=="no")){
            echo "<script>location.href='SOEN287_A4_Q3_cat1.php'</script>";
        }
        else if(($type=="dog")&&(($breed=="Golden Retriever")||($breed=="does not matter"))&&(($age=="less than a year")||($age=="does not matter"))&&(($gender=="male")||($age=="does not matter"))&&($attitude=="yes")){
            echo "<script>location.href='SOEN287_A4_Q3_dog1.php'</script>";
        }
        else if(($type=="dog")&&(($breed=="Golden Retriever")||($breed=="does not matter"))&&(($age=="3 to 5 years")||($age=="does not matter"))&&(($gender=="female")||($gender=="does not matter"))&&($attitude=="no")){
            echo "<script>location.href='SOEN287_A4_Q3_dog2.php'</script>";
        }
        else{
            echo "<script> alert('No matching pets. Here are the list of the available pets nontheless!')</script>";
            echo "<script>location.href='SOEN287_A2_Q4_BrowseAvailablePets.php'</script>";
        }
        
        }
    }
    if(array_key_exists('submit', $_POST)) {
        checkPet();
    }



    ?>
        
    </div>
    <br><br><br>
    <?php
    include 'footer.php';
    ?>

</body>
</html>