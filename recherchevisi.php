<?php include("header.php") ?>

<?php
//conexion à la BDD
include "fonctions.php";
$bdd=connect();



//requête
$recherche = strtoupper($_POST['recherche']);
$sql="select * from evenements where upper (nomevenements) like '%$recherche%'" ;

//execution de la requête
$resultat=$bdd->query($sql) ;

//affichage des resultats dans un objet
while($produit = $resultat->fetch(PDO::FETCH_OBJ))
  {
    ?>
          <div class='card' style='width: 15rem;'>
            <img src="Images/<?php echo $produit->photo ?>"class='card-img-top' >
            <div class='card-body'>
              <h4 class='card-title' ><?php echo $produit->nomevenements ?></h4>
              <p class="card-text" ><b><?php echo $produit->nomdespersonnes ?> </b></p>
              <p class="card-text" ><b> La date de l'évènements :<?php echo $produit-> dates ?> </b></p>
              <p class="card-text" ><b> L'heure de l'évènements :<?php echo $produit-> heures ?> </b></p>
              <a href="<?php echo $produit-> lien ?>" class="btn btn-dark">Lien vers le site</a>
            </div>
          </div>
  <?php
  }
  ?>

<?php include("footer.php") ?>