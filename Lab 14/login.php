<?php 
  session_start();
  $_SESSION = array();
  require_once('util.php'); 

  include("partials/_headerini.html");  
  include("partials/_loginform.html"); 
  include("partials/_footer.html"); 
 
?>