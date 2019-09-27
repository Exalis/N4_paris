<?php
include_once "bd.inc.php";

function getData(){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT *, NomPari, Joueur.Nom FROM pari 
        inner join typePari on pari.typePari = typePari.Id 
        inner join Joueur on pari.PariSur = Joueur.Id;");

        $req->execute();


        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        if($ligne == null) return;
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function addInBdd($Nom, $pariSur, $pourquoi, $typePari){
    $resultat = -1;
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("
        insert into pari (Nom, PariSur ,pourquoi, typePari)
        VALUES (:Nom, :PariSur, :pourquoi, :typePari);");

        $req->bindValue(':Nom', $Nom, PDO::PARAM_STR);
        $req->bindValue(':PariSur', $pariSur, PDO::PARAM_STR);
        $req->bindValue(':pourquoi', $pourquoi, PDO::PARAM_STR);
        $req->bindValue(':typePari', $typePari, PDO::PARAM_INT);


        $resultat = $req->execute();
        
        header('Location: tableau.php');
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getParis(){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT * from typePari;");

        $req->execute();


        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getJoueurs(){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT * from Joueur;");

        $req->execute();


        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}



?>