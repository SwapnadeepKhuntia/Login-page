<?php
  $con= mysqli_connect("localhost","root","","login_page");
  if($con)
  {
    echo "connect";
  }
  else
  {
    echo "not";
  }
?>