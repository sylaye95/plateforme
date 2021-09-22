

<?php

  $username="localhost";
  /*$name='admin';
  $password="";
  $base='COUTURE';*/
  try{
  $conn =  new PDO('mysql:host=localhost;dbname=couture','root',"");
  //verificarion de la connection
  }catch(PDOException $e){
  	$msg ='erreur pdo dans '.$e->getMessage();
  	die($msg);

  }
?>
