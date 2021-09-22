<?PHP/*
session_start();
//controler l'acces au utilisateure
if(!(isset($_SESSION['sessionLogin']))){
    header("location:../index.php");
*/}?>
<?php
$id =$_POST['id'];
$date=$_POST['date'];
$nom=$_POST['nom'];
$adresse=$_POST['adresse'];
$tel=$_POST['tel'];
$nvhicule =$_POST['nvhicule'];
$nom_c =$_POST['nom_c'];
$client =$_POST['client'];
$quantite =$_POST['quantite'];
$designation =$_POST['designation'];
$prix_unitaire=$_POST['prix_unitaire'];
$poid=$_POST['poid'];
$nbr_sacs=$_POST['nbr_sacs'];
$montant_trans=$_POST['montant_trans'];
$reste=$_POST['reste'];
$avance=$_POST['avance'];



require_once("../bd/base.php");


$dt=$conn->prepare("UPDATE  client SET DAT=?,NOM=?,ADRESSE=?,TELEPHONE=?,NVEHICULE=?,NOM_C=?,CLIENT=?,QUANTITE=?,DESIGNATION =?,PRIX_UNITAIRE=?,POID=?,NOMBRE_SACS=?,MONTANT_TRANS=?,AVANCE=?, RESTE=? where id =?");


$parametre=array($date,$nom,$adresse,$tel,$nvhicule,$nom_c,$client,$quantite, $designation ,$prix_unitaire,$poid,$nbr_sacs,$montant_trans,$reste,$avance,$id);
	# code...

$dt->execute($parametre);
header("location:../pages/admin.php");

//estokage dans une tableau de parametre//
//$par  = array($prenoms,$noms,$Login,$Mdp,$Email,$Adresse,$Telephone,$id);
/*$dt->execute($par);/*/
//header("location:detail.php");//
?>