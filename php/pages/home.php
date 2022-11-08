<section>
    <?php if (isset($_GET["add"])) { ?>
        <h1 class="text-center">Ajouter des données</h1>

        <form method="POST">
            <div class="mb-3">
                <input type="text" class="form-control" name="name" placeholder="Prénom">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" name="surname" placeholder="Nom">
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Age (18 à 70 ans)</label>
                <input type="number" class="form-control" id="age" name="age" placeholder="Renseignez votre age">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Taille (1,26m à 3m)</span>
                <input type="number" class="form-control" name="height" step=".01" placeholder="1.7">
                <span class="input-group-text">m</span>
            </div>

            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="gender" id="genderFemale" value="Femme">
                <label class="form-check-label" for="genderFemale">Femme</label>
            </div>

            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="gender" id="genderMale" value="Homme">
                <label class="form-check-label" for="genderMale">Homme</label>
            </div>

            <div class="col-12 text-end">
                <button class="btn btn-primary" type="submit">Enregistrer les données</button>
            </div>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $table = array(
                    "name" => $_POST["name"],
                    "surname" => $_POST["surname"],
                    "age" => $_POST["age"],
                    "height" => $_POST["height"],
                    "gender" => $_POST["gender"]
                );

                $_SESSION["table"] = $table;
                
                ?>
                <div class="alert alert-success text-center" role="alert">
                    Données sauvegardées
                </div>
                <?php
            }
        ?>
    <?php } else { ?>
        <a type="button" class="btn btn-primary" href="?add">Ajouter des données</a>
    <?php } ?>
</section>