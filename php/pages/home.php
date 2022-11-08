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

        $_SESSION["table"] = $table;
        
        ?>
        <div class="alert alert-success text-center" role="alert">
            Données sauvegardées
        </div>
        <?php
    } elseif (isset($_GET["add"])) {
        ?>
        <h2 class="text-center">Ajouter des données</h2>
        <?php
        include "./includes/form.inc.php";
    } elseif (isset($_GET["addmore"])) {
        ?>
        <h2 class="text-center">Ajouter plus de données</h2>
        <?php
        include "./includes/form2.inc.php";
    } else {
        ?>
        <a class="btn btn-primary" href="?add">Ajouter des données</a>
        <a class="btn btn-secondary" href="?addmore">Ajouter plus de données</a>
        <?php
    }
    ?>
</section>