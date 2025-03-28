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
        global $debeug;

        if ($debeug)
            echo $sql;
        $res = mysqli_query($conn, $sql);

        return rs_to_tab($res);
    }

    function rs_to_tab($rs){
        $tab = [];
        while ($row = mysqli_fetch_assoc($rs)) {
            $tab[] = $row;
        }
        return $tab;
    }


?>