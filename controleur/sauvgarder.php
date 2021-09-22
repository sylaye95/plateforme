<?php
/*
session_start();
//controler l'acces au utilisateure
if(!(isset($_SESSION['sessionLogin']))){
    header("location:../index.php");
*/?>
<?PHP

require_once("../bd/base.php");
if(isset($_POST['ajouter'])){
$date = $_POST['date'];
$nom = $_POST['nom'];
$adresse = $_POST['adresse'];
$tel=  $_POST['tel'];
$nvhicule =$_POST['nvhicule'];
$nom_c = $_POST['nom_c'];
$client = $_POST['client'];
$quantite = $_POST['quantite'];
$designation = $_POST['designation'];
$prix_unitaire = $_POST['prix_unitaire'];
$poid= $_POST['poid'];
$nbr_sacs=  $_POST['nbr_sacs'];
$montant_trans = $_POST['montant_trans'];
$avance = $_POST['avance'];
$reste = $_POST['reste'];


$ps = $conn->prepare("INSERT INTO  client (DAT,NOM,ADRESSE,TELEPHONE,NVEHICULE,NOM_C,CLIENT,QUANTITE,DESIGNATION,PRIX_UNITAIRE,POID,NOMBRE_SACS,MONTANT_TRANS,AVANCE,RESTE) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

$parametre=array($date,$nom,$adresse,$tel,$nvhicule,$nom_c,$client,$quantite,$designation,$prix_unitaire,$poid,$nbr_sacs,$montant_trans,$avance,$reste);
 
$ps->execute($parametre);



header("location:../pages/admin.php");
}

else{
	echo "erreur";
}
?>

