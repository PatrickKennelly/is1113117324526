<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>RECEIPT</h4>
        
         <p><strong>Congratulations on your purchase!!</strong><p>
            <?php   
            // Echo session variables that were set on previous page
            echo "Name: ". $_POST["firstname"];
            echo " " . $_POST["lastname"] .  "<br/>"; 
            echo "Email: " . $_POST["email"] . "<br/>";
            echo "Your total is: $" . $_SESSION["total"] . ".";
            ?>
        </br>
         <a href="../homepage.html"><input type="button" value="Home"></a>
    </body>
</html>