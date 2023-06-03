<?php

    
    //déclaration de nos variables de connexion
    $serveur="sql312.epizy.com";
    $login="epiz_34337156";
    $pass="TvHlz1CmGaA5lu";
    $dbname="epiz_34337156_dbname";

    

    try {
        //le test de la connexion à notre base de données si toutes les données o  nt été bien renseignées
        $connexion= new PDO("mysql:host=$serveur;dbname=$dbname;charset=utf8;", $login, $pass);
        $connexion-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //affichage d'une erreure au cas où une variable n'a pas été bien déclarée
    } catch (PDOException $e) {
        Die('Echec de la connexion : '.$e->getMessage());
    }


?>