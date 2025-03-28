<?php

    $debeug = false;

    function ajout_jean($conn,$nom,$type,$taille,$prix){
        $sql = "INSERT INTO `vente` (`nom`, `type`, `taille`, `prix`) VALUES ('$nom', '$type', $taille, $prix);";
        global $debeug;
        if ($debeug)
            echo $sql;
        $res = mysqli_query($conn, $sql);
        return $res;
    }

    function affiche_jean($conn){
        $sql = "SELECT * FROM `vente`";
        $res = mysqli_query($conn,$sql);
        return $res;
    }


?>