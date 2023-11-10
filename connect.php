<?php
function connexion()
{
  $cnx=mysqli_connect("localhost","root","root","AJAX");
  return $cnx;
}
 ?>
