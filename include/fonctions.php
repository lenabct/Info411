<?php

    function ajout_jean($conn,$nom,$type,$taille,$prix){
        $sql = "INSERT INTO Vente (`nom`, `type`, 'taille', 'prix') VALUE ('$nom', '$type', $taille, $prix)";
        global $debeug;
        if ($debeug)
            echo $sql;
        $res = mysqli_query($conn, $sql);
        return $res;
    }


?>