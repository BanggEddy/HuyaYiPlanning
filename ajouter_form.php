<?php include("headeradmin.php") ?>


    <?php
      $nomdespersonnes=$_POST["nomdespersonnes"];
      $nomevenements=$_POST["nomevenements"];
      $heures=$_POST["heures"];
      $dates=$_POST["dates"];

      $dossier_destination = 'Images/';
      $photo=$_FILES['photo']['name'];

        if(move_uploaded_file($_FILES['photo']['tmp_name'], $dossier_destination . $photo)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
        {
            echo 'Upload effectué avec succès !';
        }
        else //Sinon (la fonction renvoie FALSE).
        {
            echo 'Upload : Echec, veuillez re-essayer.';
        }



      //connexion à la BDD
      include("fonctions.php");
      $bdd=connect();

      //requete


      $sql = "INSERT INTO evenements (nomdespersonnes, nomevenements, heures, dates, photo) VALUES ('$nomdespersonnes', '$nomevenements', '$heures' ,'$dates', '$photo')";
        $resultat=$bdd->exec($sql);

          $_SESSION["message"]="Nouveau enregistrement créé avec succès";

          header("location:indexadmin.php");

      ?>


<?php include("footer.php")?>