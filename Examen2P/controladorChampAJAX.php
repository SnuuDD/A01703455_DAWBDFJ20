<?php
    session_start();
    require_once("util.php");
   // console_log($opc);
    
    $_POST["search"] = htmlspecialchars($_POST["search"]);
    echo getChampByAJAX($_POST["search"]);

?>