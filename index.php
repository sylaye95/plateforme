
<?PHP
 session_start();
 
 ?>

<!DOCTYPE html>
<html>
<head>
  <table  width="100%" border="0" bgcolor="#1100dc">
    <tr><td><img src="image/LOGO ALPHA.jpg "width="1400" height="125"></td></tr>
    </table>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
<body style="background-color: #1100dc">


	<div class="modal-dialog" role="document">
	
<div class="modal-content">
            <form  class="form form-horizontal"  method="POST" action="index.php" id="ajout" >
                 <div class="modal-header" style="background-color: #2fdc7f">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                        <span class="modal-title text-center" style="background-color: #2fdc7f" >  AUTENTIFICATION  </span></div>
                     <div class="modal-body">
                        <div class="row">
                        	<div class="form-group">
                                    <label for="nom" class="col-md-4 text-right" align="right">login</label>
                                    <div class="col-md-8">
                             <input type="text" name="login"class="form-control"></div></div>
                             <div class="form-group">
                                    <label for="nom" class="col-md-4 text-right" align="right">mot de passe</label>
                                    <div class="col-md-8">
                             <input type="password" name="password"class="form-control"></div></div>
                             
                             <div class="form-group">
                                            <div class="col-md-offset-4 col-md-8">
                                                <button type="submit" class="btn btn-sm btn-success" name="formulaireenvoye" id="connecter"> se connecter </button>
                                            </div>
                                        </div>

</form></div></div></div>
 
<?php
  /* Récupération du login et du mot passe entrer par l'utilisateur*/
  if(isset($_POST['formulaireenvoye'])){
   extract($_POST);
  
     /**TP5EXO2REP3. Établissement de la connexion au serveur de la base de données. */
     
require_once("bd/base.php");

$req =" SELECT * FROM users";
$rep=$conn->prepare($req);
$rep->execute();

     
      while($sep=$rep->fetch()){
        /* TP5EXO2REP3.Traitement de la conformité des login et mot de passe entrer avec les login et mot de passe enregistrés dans la base de données*/
          if($login== $sep['LOGIN'] && $password== $sep['MDP']){
           /*Création et affectation de la variable de session stockant le login*/
           $_SESSION['sessionLogin']= $login;
           /*Redirection vers la page d'administration*/
           header('Location: pages/admin.php');
          }
          else
          {
           /* Si le login ou le mot de passe est incorrect, on envoie le message
           d'erreur à la page elle même (index.php) par URL */
           header('Location: index.php?msg= Login ou mot de passe incorrect !');
          }
      }
      
  }
  ?></div></div>
</body>
</html>
<?php
    require_once('pages/footer.php');
    ?>

	
