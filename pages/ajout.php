<?php
//require('../utilisateurs/ma_session.php');
//include("../fonctions.php");
//require('../utilisateurs/mon_role.php');
//require('../connexion.php');

//$requete_filieres = "SELECT * FROM filiere";
//$result_requete_filieres = $pdo->query($requete_filieres);
//$toutes_les_filieres = $result_requete_filieres->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title> Nouveau stagiaire </title>
   <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.css">-->
    <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
   <!-- <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery-ui-1.10.4.custom.css">
    <link rel="stylesheet" href="css/monStyle.css">

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui-1.10.4.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="/js/school.js"></script>

    <script src="js/jquery-ui-i18n.min.js"></script>
    -->

</head>

<body>
<?php// include('../menu.php'); ?>
<br><br><br>

    <!-- <div class="modal-body">-->
<div class="form-group">
            <form method="post" action="../controleur/sauvgarder.php" >

                <div class="row my-row">
                    <label for="date" class="control-label col-sm-4"> DATE </label>
                    <div class="col-sm-8">
                        <input required type="text" name="date" id="date" class="form-control">
                    </div>
                    <label for="nom" class="control-label col-sm-4"> NOM </label>
                    <div class="col-sm-8">
                        <input required type="text" name="nom" id="nom" class="form-control">
                    </div>

            </div>
    

                <div class="row my-row">
                    <label for="adresse" class="control-label col-sm-4"> ADRESSE </label>
                    <div class="col-sm-8">
                        <input required type="text" name="adresse" id="adresse" class="form-control">
                    </div>
                    <label for="TEL" class="control-label col-sm-4">TELEPHONE </label>
                    <div class="col-sm-8">
                        <input required type="text" name="tel" id="tel" class="form-control">
                    </div>

                </div>
                <div class="row my-row">
                    <label for="nvhicule" class="control-label col-sm-4"> N°VEHICULE </label>
                    <div class="col-sm-8">
                        <input required type="text" name="nvhicule" id="nvhicule" class="form-control">
                    </div>


                    <label for="nom_c" class="control-label col-sm-4"> NOM_CHAUFEUR </label>
                    <div class="col-sm-8">
                        <input required type="text" name="nom_c" id="nom_c" class="form-control">
                    </div>

                </div>
                <div class="row my-row">
                    <label for="client" class="control-label col-sm-4"> CLIENT </label>
                    <div class="col-sm-8">
                        <input required type="text" name="client" id="client" class="form-control">
                    </div>
            
                

                    <label for="quantite" class="control-label col-sm-4"> DESIGNATION </label>
                    <div class="col-sm-8">
                        <input type="text" name="designation" id="quantite" class="form-control">
                    </div>
</div>
                
            

                <div class="row my-row">
                    <label for="designation" class="control-label col-sm-4"> QUANTITE </label>
                    <div class="col-sm-8">
                        <input type="text" name="quantite" class="form-control">
                    </div>

                    <label for="prix_unitaire" class="control-label col-sm-4"> PRIX_UNITAIRE </label>
                    <div class="col-sm-8">
                        <input required type="text" name="prix_unitaire" id="prix_unitaire" class="form-control">
                    </div>

                </div>

                <div class="row my-row">
                    <label for="poid" class="control-label col-sm-4"> POID </label>
                    <div class="col-sm-8">
                        <input required type="text" name="poid" id="poid"
                               class="form-control">
                    </div>
                

                    <label for="poid_total" class="control-label col-sm-4">NOMBRE_SACS</label>
                    <div class="col-sm-8">
                        <input requiredtype="text" name="nbr_sacs" id="poid" class="form-control">
                    </div>
                
            
</div>
                <div class="row my-row">
                    <label for="montant_trans" class="control-label col-sm-4"> MONTANT_TRANSPORT</label>
                    <div class="col-sm-8">
                        <input required type="text" name="montant_trans" id="montant_trans" class="form-control">
                    </div>

                    <label for="avance" class="control-label col-sm-4"> AVANCE </label>
                    <div class="col-sm-8">
                        <input type="text" name="avance" id="avance" class="form-control">
                    </div>
                    <br><br>
                </div>

                <div class="row my-row">
                    <label for="reste" class="control-label col-sm-4"> RESTE </label>
                    <div class="col-sm-8">
                        <input type="text" name="reste" id="reste" class="form-control">
                    </div>

                   

                <div class="row my-row">
                
                </div>


        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="ajouter" >enregistrer</button>
         <!--<input type='submit' class="btn btn-success" value="Enregistrer la modification"> -->
      
                <!--<input type='submit' class="btn btn-success" value="Enregistrer le client"> -->
            </form></div>
        
</body>
</html>
