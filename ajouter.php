<?php include("headeradmin.php") ?>
<br><br>


    <div class="container">
      <form method="POST" action="ajouter_form.php" enctype="multipart/form-data">
        <div class="row">
          <div class="col-25">
            <label for="Prénom" style="color:pink;">Nom de l'évènement :</label>
          </div>
          <div class="col-75">
            <input type="text" name="nomevenements" placeholder="Saisir le nom de l'évènements">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-25">
            <label for="Prix" style="color:pink;">Nom de(s) personne(s) qui sont effectue l'évènements :</label>
          </div>
          <div class="col-75">
            <input type="text" name="nomdespersonnes" placeholder="Saisir les noms">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-25">
            <label for="Prix" style="color:pink;">L'heure de l'évènement </label>
          </div>
          <div class="col-75">
            <input type="text" name="heures" placeholder="Sasir l'heure">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-25">
            <label for="Prix" style="color:pink;">La date de l'évènement </label>
          </div>
          <div class="col-75">
            <input type="text" name="dates" placeholder="Saisir la date(aaaa-mm-jj)">
          </div>
        </div>
<br>

        <div class="row">
          <div class="col-25">
            <label for="Sujet" style="color:pink;">Images</label>
          </div>
          <div class="col-75">
            <input type="file" name="photo" placeholder="Selectionnez l'image" ></textarea>
          </div>
        </div>
<br><br>
        <div class="row">
          <input type="submit" value="Envoyer">
        </div>
      </form>
    </div>

    <?php include("footer.php") ?>

