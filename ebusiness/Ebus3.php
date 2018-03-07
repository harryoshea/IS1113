<?php
session_start();
$name = $_REQUEST['name'];
$email =$_REQUEST['email'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Receipt</title>
        <link rel="stylesheet" href="mystylesheet4.css" type="text/css"/>
        
         <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="number.js"></script>
      
     
     </head>
    <body style="background-color:lightgrey;">
        
      <style>
      .container{
    display:inline;
    
    body{
   text-align:center;
}

/* Centered text */
.centered {
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
   
  }
  .container2{
      text-decoration:none;
      color:black;
      
  }
  .a{
  text-decoration:none;
      color:black;
  }
  </style>
   
        
        <Stong><h1>Receipt</h1></Stong>
        
       
                   

       
             <?php
            //Echo session varaibles that were set to the previous page
        echo("<strong>Name: </strong>". $name);
        echo("<br><strong>Email: </strong>". $email);
        echo "<br><strong>Total: $</strong>" .$_SESSION["total"] ;
        ?>
    
      
        </div>
        
            <a href=" ../homepage.html">Return to Homepage</a>
        </div>
    </body>
    </html>