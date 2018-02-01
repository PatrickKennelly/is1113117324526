<!DOCTYPE html>
    <html>
        <head>
            <title>Select Product</title>
            <link href= "../mystylesheet.css" rel= "stylesheet" type= "text/css">
            <!--jQuery-->
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
                
            </script>
            <script type= "text/javascript" src="cost_calc.js"></script>
        </head>
        
        <body>
            <h2> Select a Product</h2>
            
            <br/>
            
            <form method="POST" action ="Ebus2.php">
                
            
            
            <label for "salesforce">
            
            <input type="radio" id="salesforce" name="product" checked onClick ="disablebtnProceed">
            Salesforce @ $100
            </label>
            
                <br>
                
             <label for "aus">
             <input type="radio" id="aus" name="product" onClick ="disablebtnProceed">
              Aus @ $100
            </label>
            
            
            <br>
            <br>
            
            <label for "subtotal">
                Sub Total
                <input type ="text" id="total" value="0.00" readonly/>
                <br>
                
            </label>
            
            <br>
            
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
                    </form>
                    
                    <br>
                    <button onClick="calcSub()">Calculate Costs</button>
                    
                    
                         <a role="button" href="Ebus1.php" class="clear">Clear Choice</a>
                    
        </body>
    </html>