<?php
    session_start();
    require_once("util.php");

    $opc = htmlspecialchars($_POST["char"]);
   // console_log($opc);
    $_SESSION["tabla"] = getChampByChar($opc);
    header("location:selectChampChar.php");
?>