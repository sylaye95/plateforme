
<?PHP/*
session_start();
//controler l'acces au utilisateure
if(!(isset($_SESSION['sessionLogin']))){
    header("location:../index.php");
*/}?>


 <?php
 session_start();
 $id = $_GET['id'];
 require_once('../bd/base.php');

 $ps=$conn->prepare("SELECT * FROM client where id= ?");
 $para  = array($id); 
 $ps->execute($para);
  $clients = $ps->fetch();


 
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<title></title>
</head>
<body>
	<br><br><br>
<div class="container">


    <div class="panel panel-primary">
        <div class="panel-heading" align="center">MODIFIER | CLIENT</div>
        <div class="panel-body">
            <form method="post" action="misajour.php" >
<div class="row my-row">
                 
                    <div class="col-sm-4">
                        <input  type="hidden" name="id" id="" class="form-control"value= "<?php echo($clients['id']); ?>">
                    </div></div>
                <div class="row my-row">
                    <label for="date" class="control-label col-sm-2"> DATE </label>
                    <div class="col-sm-4">
                        <input required type="text" name="date" id="date" class="form-control"value= "<?php echo($clients['DAT']); ?>">
                    </div>


                    <label for="nom" class="control-label col-sm-2"> NOM </label>
                    <div class="col-sm-4">
                        <input required type="text" name="nom" id="nom" class="form-control" value= "<?php echo($clients['NOM']); ?>">
                    </div>

                </div>


                <div class="row my-row">
                    <label for="adresse" class="control-label col-sm-2"> ADRESSE </label>
                    <div class="col-sm-4">
                        <input required type="text" name="adresse" id="adresse" class="form-control" value= "<?php echo($clients['ADRESSE']); ?>">
                    </div>

                    <label for="TEL" class="control-label col-sm-2">TELEPHONE </label>
                    <div class="col-sm-4">
                        <input required type="text" name="tel" id="tel" class="form-control"value= "<?php echo($clients['TELEPHONE']); ?>">
                    </div>

                </div>

                <div class="row my-row">
                    <label for="nvhicule" class="control-label col-sm-2"> N°VEHICULE </label>
                    <div class="col-sm-4">
                        <input required type="text" name="nvhicule" id="nvhicule" class="form-control" value= "<?php echo($clients['NVEHICULE']); ?>">
                    </div>

                    <label for="nom_c" class="control-label col-sm-2"> NOM_CHAUFEUR </label>
                    <div class="col-sm-4">
                        <input required type="text" name="nom_c" id="nom_c" class="form-control" value= "<?php echo($clients['NOM_C']); ?>">
                    </div>

                </div>

                <div class="row my-row">
                    <label for="client" class="control-label col-sm-2"> CLIENT </label>
                    <div class="col-sm-4">
                        <input required type="text" name="client" id="client" class="form-control" value= "<?php echo($clients['CLIENT']); ?>">
                    </div>

                    <label for="quantite" class="control-label col-sm-2"> DESIGNATION </label>
                    <div class="col-sm-4">
                        <input type="text" name="quantite" id="quantite" class="form-control" value= "<?php echo($clients['DESIGNATION']); ?>">
                    </div>

                </div>

                <div class="row my-row">
                    <label for="designation" class="control-label col-sm-2"> QUANTITE </label>
                    <div class="col-sm-4">
                        <input type="text" name="designation" class="form-control" value= "<?php echo($clients['QUANTITE']); ?>">
                    </div>

                    <label for="prix_unitaire" class="control-label col-sm-2"> PRIX_UNITAIRE </label>
                    <div class="col-sm-4">
                        <input required type="text" name="prix_unitaire" id="prix_unitaire" class="form-control"value= "<?php echo($clients['PRIX_UNITAIRE']); ?>">
                    </div>

                </div>

                <div class="row my-row">
                    <label for="poid" class="control-label col-sm-2"> POID </label>
                    <div class="col-sm-4">
                        <input required type="text" name="poid" id="poid"
                               class="form-control" value= "<?php echo($clients['POID']); ?>">
                    </div>

                    <label for="poid_total" class="control-label col-sm-2">NOMBRE_SACS</label>
                    <div class="col-sm-4">
                        <input requiredtype="text" name="nbr_sacs" id="poid" class="form-control" value= "<?php echo($clients['NOMBRE_SACS']); ?>">
                    </div>

                </div>

                <div class="row my-row">
                    <label for="montant_trans" class="control-label col-sm-2"> MONTANT_TRANSPORT</label>
                    <div class="col-sm-4">
                        <input required type="text" name="montant_trans" id="montant_trans" class="form-control"value= "<?php echo($clients['MONTANT_TRANS']); ?>"> 
                    </div>

                    <label for="avance" class="control-label col-sm-2"> AVANCE </label>
                    <div class="col-sm-4">
                        <input type="text" name="avance" id="avance" class="form-control" value= "<?php echo($clients['AVANCE']); ?>">
                    </div>
                    <br><br>
                </div>

                <div class="row my-row">
                    <label for="reste" class="control-label col-sm-2"> RESTE </label>
                    <div class="col-sm-4">
                        <input type="text" name="reste" id="reste" class="form-control" value= "<?php echo($clients['RESTE']); ?>">
                    </div>

                   

                <div class="row my-row">
                
                </div>


                <input type='submit' class="btn btn-success" value="Enregistrer la modification"> 
            </form>
        </div>
    </div>
</div>
</body>
</html>
