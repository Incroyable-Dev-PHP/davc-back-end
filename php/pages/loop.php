<section>
    <h2 class="text-center">Boucle</h2>
    <p>===> Lecture du tableau à l'aide d'une boucle foreach</p>

    <?php
    $i = 0;
    foreach ($table as $key => $value) {
        if ($key === "file") {
            echo "à la ligne n°" . $i . " correspond la clé \"" . $key . "\" et contient<br>";
            echo "<img src=\"./uploaded/" . $value["name"] . "\">";
        } else {
            echo "à la ligne n°" . $i . " correspond la clé \"" . $key . "\" et contient \"" . $value . "\"<br>";
        }
        
        $i++;
    }
    ?>
</section>