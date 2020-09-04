<?php

if ( !(isset($_POST["email"]) && isset($_POST["pwd"]) && isset($_POST["web"]) && isset($_POST["pizza"]))) {
    
    die("No llenaste todos los campos ☹");  
  }

$email = $pwd = $web = $pizza = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST["email"]);
  $pwd = test_input($_POST["pwd"]);
  $web = test_input($_POST["web"]);
  $pizza = test_input($_POST["pizza"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

include("partials/_header.html");  

include("partials/_formres.html"); 

include("partials/_footer.html"); 




  





?>