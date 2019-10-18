<?php
include "requete.php";

if(isset($_POST['nom']) && $_POST['nom'] != null){

    $paris = getParis(2);
    for($i = 0;$i < count($paris); $i++){
        //Tout est bon
        $Nom = $_POST['nom'];
        echo $Nom;
        $why = $_POST['why'];
       
        addInBdd($Nom, $_POST["who".$i], $why, $paris[$i]["Id"]);
    }

}else{
    echo "rentrer un nom";
}
?>