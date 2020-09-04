<?php
 session_start();
if(empty($_POST)){
    die("No llenaste nada 😭");
}
if ( !(isset($_POST["user"]) && isset($_POST["pwd"]))){
    
    die("No llenaste todos los campos ☹");  
  }

$user = $pwd ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = test_input($_POST["user"]);
  $pwd = test_input($_POST["pwd"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


$_SESSION["user"] = htmlspecialchars($_POST["user"]);
$_SESSION["pwd"] = htmlspecialchars($_POST["pwd"]);
include("partials/_header.html");  
include("partials/_success.html");
include("partials/_options.html");
include("partials/_footer.html"); 

?>