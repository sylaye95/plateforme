<?PHP

//controler l'acces au utilisateure
if(!(isset($_SESSION['sessionLogin']))){
    header("location:../index.php");
}?>
 <!DOCTYPE html>
 <html>
 <head>
  <link rel="stylesheet" href="css/styles.css">

   <title></title>
 </head>
 <body>
 
 
    <script>
    function schowtable(str){
        if(str.length==""){
            document.getElementById('liste').innerHTML =='';
            return;
        }else{
             var xmlhttp =new XMLHttpRequest();
             xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("liste").innerHTML = this.responseText;
}
};
xmlhttp.open("GET", "listesclient.php?q=" + str, true);
xmlhttp.send();
        }
    }

    </script>
 </body>
 </html>

<?php
require_once("../bd/base.php");

$req =" SELECT * FROM client";
$rep=$conn->prepare($req);
$rep->execute();
?>

  
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css">-->
  <!--<link rel="stylesheet" href="css/monStyle.css">
    <title></title>
  </head>
  <body>
  <div class="panel panel-primary">
    
    <div class="panel-body">
        <div style="width: 100%; border: 1px solid red;">
          <caption><a href="ajout.php" class="btn btn-primary">
          <span class="fa fa-plus"></span> nouveau client</a> 
        </a>
    </caption>
            <table id="tab" class="table table-striped table-hover dt-responsive" cellspacing="0" width="0%">
        <thead>     

    <tr>


  <th>date</th><th>nom</th><th>adresse</th><th>telephone</th><th>n°vehicule</th><th>nom_du client</th><th>client</th><th>Quantite</th><th>désignation</th><th>prix unitaire</th><th>poid</th><th>poid_totale</th><th>montant_transport</th><th>avance</th><th>reste</th><th></th><th></th></tr>
  </thead><tbody>-->
    <!DOCTYPE html>
    <html>
    <head>
      <title></title>
      

           <!-- <link rel="stylesheet" type="text/css" href="css/style.css">-->
    </head>
    <body>

    <?php while($sep=$rep->fetch()){
      
     ?><tr>

      <td ><?php echo($sep['DAT']) ?></td>
     <td><?php echo($sep['NOM']) ?></td>
     <td><?php echo($sep['ADRESSE']) ?></td>
     <td><?php echo($sep['TELEPHONE']) ?></td>
     <td><?php echo($sep['NVEHICULE']) ?></td>
     <td><?php echo($sep['NOM_C']) ?></td>
     <!--<td><?php echo($sep['CLIENT']) ?></td>-->
    <!-- <td><?php echo($sep['QUANTITE']) ?></td>-->
     <!--<td><?php echo($sep['DESIGNATION']) ?></td>-->
     <!--<td><?php echo($sep['PRIX_UNITAIRE']) ?></td>
     <td><?php echo($sep['POID']) ?></td>
     <td><?php echo($sep['POID_TOTAL']) ?></td>-->
     <!--<td><?php echo($sep['MONTANT_TRANS']) ?></td>-->
     <td><?php echo($sep['AVANCE']) ?></td>
     <!--<td><?php echo($sep['RESTE']) ?></td>-->
     <td style="width: 10px;">
     <a href="../fpdf/imprimer.php?id=<?php echo($sep['id'])?>"  class="btn btn-success" >imprimer</a></td>
    <td><a href="../controleur/modifier.php?id=<?PHP echo($sep['id'])?>" class= "  glyphicon glyphicon-crayon btn btn-success ">modif</a></td>
    <td><a onclick="return confirm('vouler vous  vraiment supprimer cette client')"href="../controleur/supprimer.php?id=<?php echo($sep['id'])?>" class= ' btn btn-danger'>sup</a></td></tr>
    <?PHP
  }


?>
    
    </body>
    </html>
      
  
