<?php
     
   //inclusion du fichier database.php dans le fichier insActions.php
    require('database.php'); 

    //verifie si le bouton inscrire existe ou si l'utilisateur a bien cliqué là de sur
    if (isset($_POST['inscrit'])) {

        //verifie si l' utilisateur a bien complété tous les champs
        if (!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['numero']) AND !empty($_POST['email'])) {

            //récupère toutes les données de l'utilisateur
            $nom=htmlspecialchars($_POST['nom']);
            $pren=htmlspecialchars($_POST['prenom']);
            $num=htmlspecialchars($_POST['numero']);
            $mail=htmlspecialchars($_POST['email']);
           

            //récupérer le pseudo de l'utilisateur qui est dans notre base de données
            $verififparticipantexist= $connexion->prepare("SELECT nom_p, pren_p FROM participant WHERE nom_p=? AND  pren_p=?");
            $verififparticipantexist->execute(array($nom, $pren));

            //vérifie si l'utilisateur existe déjà dans notre base de données gràce à son pseudo qui a été récupéré par la requête sql
            if ($verififparticipantexist->rowcount() == 0) {
                //insertion des données de l'utilisateur lorsque celui-ci n'existe pas dans la base de données
                $participant_insertion= $connexion->prepare("INSERT INTO participant(nom_p,pren_p,num_tel_p,email_p) VALUES (?,?,?,?)" );
                $participant_insertion->execute(array($nom, $pren, $num, $mail));
                
                $SuccesMsg="Participant(e) bien inséré(e)...";
            }
            else {
                $ErrorMsg="Participant(e) existe déjà...";
            }
        }
        else {
            $ErrorMsg="veuillez complèter tous les champs...";
        }
    }


?>