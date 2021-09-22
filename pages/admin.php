
<?PHP
session_start();
//controler l'acces au utilisateure
if(!(isset($_SESSION['sessionLogin']))){
    header("location:../index.php");
  }
?>
  <table width="100%" border="0" bgcolor=" #fff">
    <tr>
      <td><div class="logo"><img src="../image/LOGO ALPHA.jpg" width="150" height="100"></div></td>
                                
                              <td>  <div class="col-md-10">
                                   <img src="../image/user.png" class="img-circle">  
                                   <div class="user">
                                        </div> 
                                  <a href="../bd/déconnection.php">Déconnexion</a>
                                </div>
                            </div>
                         
                    </div></td></tr>
                </table>

<!DOCTYPE html>
<html>
<head>
 







	<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
  <link rel="stylesheet" type="text/css" href="../DataTables/media/css/jquery.dataTables.min.css">
 <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.css">-->
  <link rel="stylesheet" type="text/css" href="/DataTables/media/font-awesome/css/font-awesome.css">
 <link rel="stylesheet" href="../css/styles.css">


 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	  <meta charset="utf-8">
	<title ></title>
  
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="../DataTables/media/js/dataTables.bootstrap.min.js" ></script>
<script type="text/javascript"  src="../DataTables/media/js/bootstrap.js"></script>
<script type="text/javascript"  src="../DataTables/media/js/lenguajeusuario.js"></script>
<script type="text/javascript" src="../DataTables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../js/tableau.js"></script>
<script type="text/javascript" src="../js/ajax.js"></script>



</head>
<body>
<p id="liste"></p>
  <!--modal-->

<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary">
  Launch demo modal
</button>-->

<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajout Client</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
                            <div class="col-md-12">
        <?php require('ajout.php');
   
        ?>
        <!--<div class="form-group">
          <form>
          <div class="row my-row">
                    <label for="date" class="control-label col-sm-2"> DATE </label>
                    <div class="col-sm-4">
                        <input required type="text" name="date" id="date" class="form-control">
                    </div>
                  </div>
          </form>-->
       </div></div></div>
      </div>
       
        
  
      
    </div>
  </div>
</div>

  <!--modal-->
  <div class="container" style="margin-top: 30px;">
    <div class="jumbotron">
 <div class="panel panel-default">
 
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="table-responsive">
        
       
     <caption><button    class="btn btn-primary"  data-toggle="modal" data-target="#add"  ><h6 style="height: 15px;">ajouter un client</h6></button><!--<a href="ajout.php" class="btn btn-primary"  data-toggle="modal" data-target="#add">
          
          <span class="fa fa-plus"  ></span> nouveau client</a>--> </caption>

<table id='tab' class='table table-bordered table-striped table-condensed display'    width="100%" cellspacing="0">
  
        
        <thead> 
            <tr style="background-color:blue; color: white;">
<th>date</th><th>nom</th><th>adresse</th><th>telephone</th><th>n°vehicule</th><th>nom_du client</th><!--<th>désignation</th><th>prix unitaire</th><th>poid</th><th>poid_totale</th><th>montant_transport</th>--><th>avance</th>
              <th>imprimer</th>
              <th>modifer</th>
              <th>supprimer</th>
              

            
            </tr>
 
        </thead>
        <tbody > 
        
          <?php include_once('listesclient.php'); ?></tbody>
          
        </tbody>
    </table></div></div></div></div></div></div></div>

  <!-- Button trigger modal -->
	
<!--<table id="tab" class="table table-striped table-hover dt-responsive" cellspacing="0" width="0%">
  
  
  <thead>
    <tr>


	<th>date</th><th>nom</th><th>adresse</th><th>telephone</th><th></th><th>nom_du client</th><th>client</th><th>prix unitaire</th><th>montant_transport</th><th>avance</th><th>reste</th><th></th><th></th><th></th></tr>
 
	      
	</thead>
<tbody>
<?php include_once('listesclient.php'); ?></tbody>

</table>-->
    
 
    

</body>
</html>

    <div class='footer'>
      <div class='container'>
        <div class="row">
          <div class="col-md-12 text-center">
          <!-- <hr /> -->
            &copy; <a href="#" target="blanc"> SY - ABDOULAYE </a> - <?= date('Y'); ?> - Tous droits réservés
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">à abdoulaye sy concepteur et developpeur de plateforme et de logiciel pour vos entreprise
            <a href="#" target="blanc">ABDOULAYE</a>)
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            et maintenance de logicielle (<a href="http://localhost/plateforme/index.php " target="blanc">ABDOULAYE</a>)
          </div>
        </div>
      </div>
    </div>