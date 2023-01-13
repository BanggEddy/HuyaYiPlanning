<?php include("headeradmin.php") ?>

    <?php

        include "fonctions.php";
        $bdd = connect();

        $sql = "select * from evenements order by dates";

        $resultat = $bdd->query($sql);



        while($produit = $resultat->fetch(PDO::FETCH_OBJ))
        {

          echo "<div class='card' style='width: 15rem;' enctype='multipart/form-data'>
          <img src='Images/$produit->photo' class='card-img-top' max-height: 182px>
          <div class='card-body'>
            <h4 class='card-title'><b>$produit->nomevenements</b></h4>
            <p class='card-text' ><b> Nom des personnes : $produit->nomdespersonnes </b></p>
            <p class='card-text' ><b> La date de l'évènements : $produit->dates </b></p>
            <p class='card-text' ><b> L'heure de l'évènements : $produit->heures </b></p>
              <a class='btn btn-warning' href='modifier_form.php?choix=$produit->id'>Modifier <i class='far fa-edit'></i></a>
            </div>
          </div>";

        }
    ?>
<?php include("footer.php") ?>
