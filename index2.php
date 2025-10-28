



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <!-- <label >username</label><br>
         <input type="text" name="username"><br>
         <br>
         <label >password</label><br>
         <input type="password" name="password"><br>

         <br> -->
         


       

         <label >Value</label>
         <input type="number" name="number"><br>

           <input type="submit" value="Log in" ><br>
         <br>
         <br>

    </form>
    
</body>
</html>

<?php

// if((isset($_GET["username"])) && isset($_GET["password"])){
//  echo $_GET["username"];
//  echo $_GET["password"];
// }

// if (isset($_POST["username"]) && isset($_POST["password"])) {
//     echo $_POST["username"];
//     echo $_POST["password"];
// }

 
 function rohit($owner,$age){
    echo "The function is invokedd by {$owner} and age is {$age}";
 }

 if(isset($_GET["number"])){
    $price = $_GET["number"];
    $amount = $price * 17;
    echo "The final price is {$amount}";

    

    rohit("rohit",22);
 }





?>

