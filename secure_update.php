<?php
        session_start();

        include "fonctions.php";
        $bdd = connect();

        $choix=$_GET["choix"];
        $nomdespersonnes=$_POST["nomdespersonnes"];
        $nomevenements=$_POST["nomevenements"];
        $heures=$_POST["heures"];
        $dates=$_POST["dates"];

        $photo=$_POST["photo"];

        //move photo dans dossier

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

        //requêtes
        $sql = "update evenements SET nomevenements ='$nomevenements', nomdespersonnes='$nomdespersonnes', heures ='$heures', dates = '$dates', photo='$photo WHERE id='$choix'; " ;

        $resultat=$bdd->query($sql);

        echo $sql;
        
        header("location:modifier.php");
?>
