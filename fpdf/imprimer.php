
<?PHP/*
session_start();
//controler l'acces au utilisateure
if(!(isset($_SESSION['sessionLogin']))){
    header("location:../index.php");
}*/?>
<?php
require('../bd/base.php');
//require("../listesclient.php");




  
  
 $id = $_GET['id'];
$ps=$conn->prepare("SELECT * FROM client where id= ?");
 $para  = array($id); 
 $ps->execute($para);


  $clients = $ps->fetch();

   $date = strtoupper($clients['DAT']);
   $Nom_d = strtoupper($clients['NOM']);
   $Adresse = strtoupper($clients['ADRESSE']);
     $telephone = strtoupper($clients['TELEPHONE']);
     $nvehicule = strtoupper($clients['NVEHICULE']);
     $nom_c = strtoupper($clients['NOM_C']);
     $Client = strtoupper($clients['CLIENT']);
     $nbr_sacs = strtoupper($clients['NOMBRE_SACS']);
     $Montanttrans = strtoupper($clients['MONTANT_TRANS']);
     $avance = strtoupper($clients['AVANCE']);
     $Reste = strtoupper($clients['RESTE']);
  $designation = strtoupper($clients['DESIGNATION']);

$quantite = strtoupper($clients['QUANTITE']);

$prix_unitaire = strtoupper($clients['PRIX_UNITAIRE']);

$poid = strtoupper($clients['POID']);

  require('fpdf.php');
  
    // En-tête
    
     



//Création d'un nouveau doc pdf (Portrait, en mm , taille A5)

//Création d'un nouveau doc pdf (Portrait, en mm , taille A5)
$pdf = new FPDF('P', 'mm', 'A4');

//Ajouter une nouvelle page
$pdf->AddPage();
// Saut de ligne


// Police Arial gras 16
//$pdf->SetFont('Arial', "B", 9);

// Titre
// Saut de ligne

// Début en police Arial normale taille 10

//$pdf->SetFont('Arial', '', 9);


//Ecriture en Gras-Italique-Souligné(U)

//$pdf->Write($h, $nom_prenom . "\n");

//Ecriture normal
$pdf->Cell(35,10,"",0,1,'R');
$pdf->SetFont('Arial','B',35);
$pdf->Cell(120,5,"ALPHA SY",0,0,'L');
$pdf->SetFont('Arial','',9);
$pdf->Cell(120,5,"Dakar le ........................". $date,0,1,'L');
$pdf->SetFont('Arial','B',15);
$pdf->Cell(120,5,"",0,1,'L');
$pdf->Cell(120,5,"Transporteur de produit Divers",0,1,'L');
$pdf->SetFont('Arial','',15);
$pdf->Cell(120,5," keur Massar Diacksao 1",0,0,'L');


$pdf->Cell(60,5, "",0,1,'L');
$pdf->SetFont('Arial','',15);
$pdf->Cell(120,5," TEL: 775769296-DAKAR (sénegal)",0,0,'L');
   $pdf->Cell(60,5,"",0,1,'L');
$pdf->ln(4);
$pdf->SetFont('Arial', "B", 30);
// Titre
$pdf->Cell(0, 16, 'BON DE TRANSPORT', '', 0, 'C');
$pdf->ln(2);

$pdf->SetFont('Arial','',12);
$pdf->ln(20);
$pdf->Cell(120,5,"Nom et Adresse proprietaire Camion:         " .$Nom_d."  ".$Adresse,0,0,'L');
$pdf->SetFont('Arial','',12);
$pdf->ln(8);

$pdf->Cell(120,5,"Téléphone :     " .$telephone. "    N°Véhicule :".$nvehicule."   Nom du Chaufeur : ".$nom_c,0,0,'L');
$pdf->SetFont('Arial','',12);
$pdf->ln(8);

$pdf->Cell(120,5,"Client:  ".$Client,0,0,'L');



//$pdf->Cell(60,5,"",0,0,'L');
$pdf->Cell(35,10,"",0,1,'R');
//$pdf->SetFont('Arial','B',10);
//$entete = array('Réf ACMX', 'Désignation', 'P.U. HT', 'Quantité', 'Montant HT');
// Chargement des données
//$pdf->ln(8);
$pdf->Cell(25,20,"",0,0,'C');
$pdf->Cell(1, 10, '', 'TB', 1, 'C');
$pdf->Cell(35,10,"Quantité",1,0,'L');
$pdf->Cell(35,10,"Désignation",1,0,'L');
$pdf->Cell(60,10,"prix Unitaire",1,0,'L');
$pdf->Cell(60,10,"poids",1,0,'L');
$pdf->SetFont('Arial','',14);
$pdf->ln(0);
//$pdf->AddPage();
//$pdf->FancyTable($entete,$data);
    
//$pdf->Cell(20,10,"",0,0,'L');
 //$pdf->Cell(20,10, "designation : " . $designation . 'L');
 //$pdf->SetFont('Arial','B',10);
//$pdf->Cell(30?10,'designation',1,1 ,'R' );
//Titres des colonnes
$pdf->Cell(25,20,"",0,0,'C');
$pdf->Cell(1, 10, '', 'TB', 1, 'C');
$pdf->Cell(35,70,$quantite,1,0,'L');
$pdf->Cell(35,70,$designation,1,0,'L');
$pdf->Cell(60,70,$prix_unitaire ,1,0,'L');
$pdf->Cell(60,70,$poid,1,0,'L');
$pdf->ln(56);
$pdf->SetFont('Arial','',12);
$pdf->ln(20);
$pdf->Cell(120,5,"nombre-de-sacs : ".$nbr_sacs,0,0,'L');
$pdf->SetFont('Arial','',12);
$pdf->ln(8);

$pdf->Cell(120,5,"Montant Transport:              ".$Montanttrans,0,0,'L');
$pdf->ln(8);

$pdf->Cell(120,5,"Avance   :  ".$avance."              Reste             ".$Reste,0,0,'L');
$pdf->SetFont('Arial','B',10);
$pdf->ln(10);
$pdf->Cell(0,10,"Signature du Chaufeur",0,0,'C');
$pdf->ln(15);
//$pdf->Write($h, "La présente attestation est délivrée à l'intéressé Pour servir et valoir ce que de droit. \n");
$pdf->SetFont('Arial', '', 10);

$h = 5;
$retrait = "";

$pdf->write($h,"   Nous ne somme pas responsable de la perte
  des machandises figurant sur le bon transport
  de ce fait nous demandons aux clients d'assister
  au chargement de leurs marchandises à l'arrivée
  du camion et de controler soigneusment selon 
  le bon de transport  \n",'L');
$pdf->SetFont('Arial','',10);
$pdf->ln(8);
$pdf->Output('', '', true);


?>
