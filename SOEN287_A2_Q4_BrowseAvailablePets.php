<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href="SOEN287_A2_Q4_BrowseAvailablePets.css" rel="stylesheet" type="text/css">
<title>Browse Pets</title>

<script src="BrowseAvailablePets.js"></script>
</head>
<body>
<?php
    include 'header.php';
    ?>
    <div class="content">
        
        <table class="center">
            <tr>
                <td>/</td>
                <td><strong>Name:</strong></td>
                <td><strong>Picture:</strong></td>
                <td><strong>/</strong></td>
                
            </tr>
        
            <tr>
                <td>1.</td>
                <td>Shelby</td>
                <td><figure>
                    <img  class="image" src="dog1.jfif" alt="dog image">
                    <figcaption>taken from: https://unsplash.com</figcaption>
                  </figure> 
                </td>
                <td><button type="button"> I'm intrested!</button></td>
                
            </tr>
        
            <tr>
                <td>2.</td>
                <td>Anko</td>
                <td><figure>
                    <img  class="image" src="dog2.jfif" alt="cat image">
                    <figcaption>taken from: https://www.pexels.com</figcaption>
                  </figure> 
                </td>                
                <td><button type="button"> I'm intrested!</button></td>
            </tr>
        
            <tr>
                <td>3.</td>
                <td>Mimou</td>
                <td><figure>
                    <img  class="image" src="cat1.jpg" alt="cat image">
                    <figcaption>taken from: https://www.womansday.com</figcaption>
                  </figure> 
                </td>                
                <td><button type="button"> I'm intrested!</button></td>
            </tr>
        
            <tr>
                <td>4.</td>
                <td>Lella</td> 
                <td><figure>
                    <img  class="image" src="cat2.jpg" alt="cat image">
                    <figcaption>taken from: https://www.pinterest.ca</figcaption>
                  </figure> 
                </td>                   
                <td><button type="button"> I'm intrested!</button></td>
            </tr>
        </table>


    </div>
    <?php
    include 'footer.php';
    ?>

</body>
</html>