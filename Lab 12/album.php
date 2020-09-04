<?php 
  session_start();

  include("partials/_header.html");  
  include("partials/_usermsg.html");
  echo "<h4>Tu album:</h4>";
  include("fotos.php");
  include("partials/_btnregreso.html");  
  include("partials/_footer.html"); 

  
?> 