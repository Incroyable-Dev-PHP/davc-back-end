<section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_SESSION["table"])) {
            $table = $_SESSION["table"];
        }

        foreach ($_POST as $key => $value) {
            if (!empty($_POST[$key])) {
                $table[$key] = $value;
            }
        }

        $file_errors = array();

        if (strlen($_FILES["file"]["name"]) === 0) {
            $file_errors[] = "Aucun fichier n'a été téléchargé";
        }

        if ($_FILES["file"]["size"] > 2000000) {
            $file_errors[] = "La taille de l'image doit être inférieure à 2Mo";
        }

        if ($_FILES["file"]["type"] === "application/pdf") {
            $file_errors[] = "Extension \"pdf\" non prise en charge";
        }

        if (count($file_errors) > 0) {
    ?>
            <div class="alert alert-danger" role="alert">
                <?php
                foreach ($file_errors as $error) {
                    echo $error . "<br>";
                }
                ?>
            </div>
        <?php
        } else {
            move_uploaded_file($_FILES["file"]["tmp_name"], "./uploaded/" . $_FILES["file"]["name"]);
            $table["file"] = $_FILES["file"];
        }

        $_SESSION["table"] = $table;
        var_dump($_SESSION);
        ?>
        <div class="alert alert-success text-center" role="alert">
            Données sauvegardées
        </div>
    <?php
    } else {
    ?>
        <a class="btn btn-primary" href="?add">Ajouter des données</a>
        <a class="btn btn-secondary" href="?addmore">Ajouter plus de données</a>
    <?php
    }
    ?>
</section>