<?php include("headeradmin.php") ?>

    <?php

        $choix = $_GET["choix"];

        $sql = "select * from evenements where id=$choix";

        $_SESSION["choix"] = $choix;

        include "fonctions.php";
        $bdd = connect();

        $resultat=$bdd->query($sql);

        $produit = $resultat->fetch(PDO::FETCH_OBJ);

            echo "<form method='POST' action='secure_update.php?choix=$choix' enctype='multipart/form-data'>
            <div class='form-group'>
                <label for='formGroupExampleInput'>Le nom de l'évènement : </label>
                <input type='text' class='form-control' id='formGroupExampleInput' placeholder='Saisir le nom de l'évènement ' name='nomevenements' value='$produit->nomevenements'>
                <br>
                <label for='formGroupExampleInput2'>Le nom de(s) personne(s) </label>
                <input type='text' class='form-control' id='formGroupExampleInput2' placeholder='Saisir les noms' name='nomdespersonnes' value='$produit->nomdespersonnes'>
                <br>
                <label for='formGroupExampleInput2'>L'heure de l'évènement : </label>
                <input type='text' class='form-control' id='formGroupExampleInput2' placeholder='Saisir l'heure' name='heures' value='$produit->heures'>
                <br>
                <label for='formGroupExampleInput2'>La date de l'évènement : </label>
                <input type='text' class='form-control' id='formGroupExampleInput2' placeholder='Saisir la date' name='dates' value='$produit->dates'>
                <br>
                <label for='formGroupExampleInput2'>Image du produit : </label>
                <br>
                <br>
                <input type='file' name='photo' accept=''>

                <br><br>

                <button type='submit' class='btn btn-primary'>Enregistrer</button>
            </div>

            </form>";

?>

<?php include("footer.php") ?>
