<?php
// Start the session
session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        
        <title>Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
    </head>
    
    <body>
        
        <!--Adding details section for payment-->
        
        <h4>Please enter your payment details.</h4>
        
            <br />
            
            <form method = "POST" action = "Ebus3.php">
                
                <label for="Name">Full Name: </label><br/>
                    <input type="text" name="firstname" id="user_name" maxlength="20" placeholder="First.." class="name">
                    <input type="text" name="lastname"id="last_name" maxlength=20 placeholder="Last.." class="name">
                    <br/><br/>
                    <label for="email">Email:</label>
                    <br/>
                    <input type="text" name="email" id="user_Email" maxlength="30" placeholder="Your Email..">
                    <br/><br/>
                
                <label for="user_pin">
                     PIN 
                </label>
                
                <!--Adding buttons-->
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                    
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
            <br />
            
            <button onClick="validateDetails()"> Validate </button>
        
        <script type="text/javascript" src="Ebus2_validator.js"></script>
        <?php
        // Set session variables
        $_SESSION["total"] = $_POST["total"];
        ?>
        
    </body>
    
    
    
</html>


