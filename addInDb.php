<?php
include "requete.php";

if(isset($_POST['nom']) && $_POST['nom'] != null){
    
    if(isset($_POST['paris']) && $_POST['paris'] != null){

        if(isset($_POST['who']) && $_POST['who'] != null){
            
            //Tout est bon
            $Nom = $_POST['nom'];
            $pari = $_POST['paris'];
            $who = $_POST['who'];
            $why = $_POST['why'];

            

            addInBdd($Nom, $who, $why, $pari);
            

        }else{
            echo "sur qui ?";
        }
    }else{
        echo "quel paris ?";
    }
}else{
    echo "rentrer un nom";
}


?>