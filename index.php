<?php require('actions/indexActions.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>
<body>

    <?php require ('includes/navbar.php'); ?>


    <br><br>
    <!-- ceci est du code boostrap -->
    <form class="container" method="POST">
     <?php if(isset($ErrorMsg)){
            echo "<p>" .$ErrorMsg. "</p>"; 
            }elseif(isset($SuccesMsg)){
            echo "<p>" .$SuccesMsg. "</p>"; 
            }
        ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="prenom">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Numéro Téléphone</label>
            <input type="numero" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="numero">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email">
        </div>
        <button type="submit" class="btn btn-primary" name="inscrit">VALIDER</button>
        <button type="reset" class="btn btn-primary" name="annule">ANNULER</button>
      
    </form>
    <br><br>

    <?php include 'includes/footer.php'; ?>
   
</body>
</html>
