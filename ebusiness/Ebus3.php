<?php
session_start();
$name = $_REQUEST['name'];
$email =$_REQUEST['email'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Receipt</title>
        <link rel="stylesheet"  type="text/css"/>
        
         <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="number.js"></script>
      
     <style>
     
    
    body{
   text-align:center;
   
   </style>

  
     
     
     </head>
    <body style="background-color:lightblue;">
        
    
   
        
        <Stong><h1>Receipt</h1></Stong>
        
       
                   

       
             <?php
            //Echo session varaibles that were set to the previous page
        echo("<strong>Name: </strong>". $name);
        
        echo("<br><strong>Email: </strong>". $email);
        
        echo "<br><strong>Total: $</strong>" .$_SESSION["total"] ;
        ?>
    <br>
      <br>
      <br>
        </div>
        
            <a href=" ../homepage.html" class="btn btn-success">Home</a>
        </div>
    </body>
    </html>