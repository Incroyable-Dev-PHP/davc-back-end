<?php
function readTable() {
    if (!isset($table)) {
        if (isset($_SESSION["table"])) {
            $table = $_SESSION["table"];
        }
    }

    $i = 0;
    foreach ($table as $key => $value) {
        echo "à la ligne n°" . $i . " correspond la clé \"" . $key . "\" et contient \"" . $value . "\"<br>";
        $i++;
    }
}
?>

<section>
    <h2 class="text-center">Fonction</h2>
    <p>===> J'utilise ma fonction readTable()</p>
    <?php readTable(); ?>
</section>