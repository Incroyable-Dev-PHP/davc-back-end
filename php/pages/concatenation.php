<section>
    <h2 class="text-center">Concaténation</h2>

    <h3>===> Construction d'une phrase avec le contenu du tableau</h3>
    <p>
        <?php
        echo ($table["gender"] === "Homme" ? "Mr" : "Mme") . " " . $table["name"] . " " . $table["surname"] . "<br>";
        echo "J'ai " . $table["age"] . " ans et je mesure " . $table["height"] . "m.";
        ?>
    </p>

    <?php
    $table["name"] = ucfirst(strtolower($table["name"]));
    $table["surname"] = ucfirst(strtolower($table["surname"]));
    ?>

    <h3>===> Construction d'une phrase après MAJ du tableau</h3>
    <p>
        <?php
        echo ($table["gender"] === "Homme" ? "Mr" : "Mme") . " " . $table["name"] . " " . $table["surname"] . "<br>";
        echo "J'ai " . $table["age"] . " ans et je mesure " . $table["height"] . "m.";
        ?>
    </p>

    <h3>===> Affichage d'une virgule à la place du point pour la taille</h3>
    <p>
        <?php
        echo ($table["gender"] === "Homme" ? "Mr" : "Mme") . " " . $table["name"] . " " . $table["surname"] . "<br>";
        echo "J'ai " . $table["age"] . " ans et je mesure " . number_format($table["height"], 2, ",", " ") . "m.";
        ?>
    </p>
</section>