<?php include("headeradmin.php") ?>

     
     <?php
      //conexion à la BDD
      require "fonctions.php";
      $bdd=connect();

      //requête
      $sql = "select * from evenements order by dates";


      //execution de la requête
      $resultat=$bdd->query($sql) ;

      //affichage des resultats dans un objet>

      while($produit = $resultat->fetch(PDO::FETCH_OBJ))
        {
          ?>
          <div class='card' style='width: 15rem;'>
            <img src="Images/<?php echo $produit->photo ?>"class='card-img-top' >
            <div class='card-body'>
              <h4 class='card-title' ><?php echo $produit->nomevenements ?></h4>
              <p class="card-text" ><b> Nom des personnes : <?php echo $produit->nomdespersonnes ?> </b></p>
              <p class="card-text" ><b> La date de l'évènements : <?php echo $produit-> dates ?> </b></p>
              <p class="card-text" ><b> L'heure de l'évènements : <?php echo $produit-> heures ?> </b></p>
            </div>
          </div>
        <?php
        }
        ?>

<?php include("footer.php") ?>
