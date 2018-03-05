<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        
        <!--Adding receipt that contains personal and payment details-->
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>RECEIPT</h4>
        
         <p><strong>Thank you for your recent purchase</strong><p>
            <?php  
            
           
             //Displaying details that were inputed on previous page
            echo "Name: ". $_POST["firstname"];
            
            echo " " . $_POST["surname"] .  "<br/>"; 
            
            echo "Email: " . $_POST["email"] . "<br/>";
            
            echo "Your total is: $" . $_SESSION["total"] . ".";
            ?>
        </br>
        
        <!--Adding buttons-->
         <a href="../homepage.html"><input type="button" value="Home"></a>
    </body>
</html>