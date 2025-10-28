<?php

include("headers.html");
setcookie("fav-food","pizza", time()+ (86400)*2,"/");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php website</title>
<link rel="stylesheet" href="index.css">
</head>
<body>
    <br>
    <br>
    <h2>This is the Home Page of the Website</h2>
    <br>
    <br>
<!-- 
    <label value="password">password</label>
    <input type="text" name="password"> -->


    <hr>
    
</body>
</html> 
<?php

  $password = "something";

  $hashed = password_hash($password,PASSWORD_DEFAULT);
  
  echo $hashed;
  echo "<br>";

  if(password_verify("pizza",$hashed)){
    echo "Password was correct <br>";
  } else{
    echo "Password Incorrect";
  }

 


include("footer.html")

?>