<?php
session_start();
require_once("util.php");
    
    $_SESSION["tabla"] = getIncidentes();

include("partials/_header.html");
include("partials/_usermsg.html"); 
//var_dump($_SESSION["tabla"]);
if(isset($_SESSION["tabla"])){
    echo $_SESSION["tabla"];        
}
//var_dump($_SESSION["tabla"]);

include("partials/_btnregreso.html");   
include("partials/_footer.html");
unset($_SESSION["tabla"]);
?>