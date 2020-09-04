<?php
session_start();
//require_once("util.php");
   


include("partials/_header.html");
include("partials/_usermsg.html"); 
include("partials/_formularioAddChamp.html");

if(isset($_SESSION["tabla"]) && isset($_SESSION["res"])  ){
    echo $_SESSION["res"];
    echo $_SESSION["tabla"];
              
}
//var_dump($_SESSION["tabla"]);

include("partials/_btnregreso.html");   
include("partials/_footer.html");
unset($_SESSION["tabla"]);
unset($_SESSION["res"]);
?>