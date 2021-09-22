
<?php




{
     global $pdo;
    $req = $pdo->prepare("select * from users where LOGIN=? and  MDP=?");
    $valeur = array($LOGIN, $id);
    $req->execute($valeur);
    $nbr_user = $req->rowCount();
    return $nbr_user;
}

//Recherche par login et pwd (Soit l'utilisateur soit NULL)
function recherche_user_byLoginPwd($LOGIN, )
{
     global $pdo;
	 
    $req = $pdo->prepare("select * from utilisateur where login=? and pwd=?");
    $valeur = array($login, $pwd);
    $req->execute($valeur);
    $nbr_user = $req->rowCount();

    if ($nbr_user == 1) // si l'utilisateur existe
        return $req->fetch(); //Retourner l'utilisateur(id_utilisateur,login,pwd et role)
    else // si l'utilisateur n'existe pas
        return 0;

}
?>