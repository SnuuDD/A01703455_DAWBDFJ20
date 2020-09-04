<?php
session_start();
//require_once("util.php");
   


include("partials/_header.html");
include("partials/_usermsg.html"); 
include("partials/_consultaChampChar.html");

if(isset($_SESSION["tabla"])){
    echo $_SESSION["tabla"];        
}
//var_dump($_SESSION["tabla"]);

include("partials/_btnregreso.html");   
include("partials/_footer.html");
unset($_SESSION["tabla"]);
?>