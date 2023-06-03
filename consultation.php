
<?php require('actions/consultationActions.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>
<body>


    <?php  include 'includes/navbar.php'; ?>
    <br><br>
    <div class="container table-responsive">

        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>IDENTIFIANT DU PARTICIPANT</th>
                    <th>NOM DU PARTICIPANT</th>
                    <th>PRENOM DU PARTICIPANT</th>
                    <th>NUMERO DU PARTICIPANT</th>
                    <th>EMAIL DU PARTICIPANT</th>
                </tr>
            </thead>
            
            <?php 

                while($infos=$getallinformations->fetch()){

                    ?>

                        <tbody>
                            <td><?= $infos['id']; ?> </td>
                            <td><?= $infos['nom_p']; ?> </td>
                            <td><?= $infos['pren_p']; ?> </td>
                            <td><?= $infos['num_tel_p']; ?> </td>
                            <td><?= $infos['email_p']; ?> </td>
                        </tbody>
                    
                    <?php

                }
            
            ?>
        </table>
    </div>
    <br><br>

    <?php include 'includes/footer.php'; ?>


</body>
</html>



 
