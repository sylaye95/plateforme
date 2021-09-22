
<?PHP/*
session_start();
//controler l'acces au utilisateure
if(!(isset($_SESSION['sessionLogin']))){
    header("location:../index.php");
*/}?>
<?php
 $id =$_GET['id'];
 require_once('../bd/base.php');
 $ps=$conn->prepare('DELETE FROM client WHERE id = ?');
 $para =array($id);
 $ps->execute($para);
 header("location:../pages/admin.php");
?>