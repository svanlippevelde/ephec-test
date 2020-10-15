<?php

try {

    $bdd = new PDO('mysql:host=127.0.0.1;dbname=profephec_hauteeco;charset=utf8', 'profephec_hauteeco', 'iaAPOdDff0sk');

}
catch (Exception $e)

{

    die('Erreur : ' . $e->getMessage());

}

    $reponse = $bdd->query('SELECT * from professeur where prof_id < 10');

    while ($ligne = $reponse->fetch()){


        echo 'Le professeur '.$ligne['nom'].' '.$ligne['prenom'].' a comme adresse : '.$ligne['adresse'].'</br>';


    }

    $reponse->closeCursor();


    ?>