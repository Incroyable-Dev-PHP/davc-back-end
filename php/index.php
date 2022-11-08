<?php
session_start();

if (isset($_SESSION["table"])) {
    $table = $_SESSION["table"];
}
?>

<!DOCTYPE html>
<html>
<?php include "./includes/head.inc.php"; ?>

<body>
    <?php include "./includes/header.inc.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-3">
                <?php include "./includes/nav.inc.php"; ?>
            </div>

            <div class="col-12 col-md-3 col-lg-9">
                <?php
                if (isset($_GET["debugging"])) {
                    include "./pages/debugging.php";
                } elseif (isset($_GET["add"])) {
                    include "./pages/add.php";
                } elseif (isset($_GET["addmore"])) {
                    include "./pages/addmore.php";
                } elseif (isset($_GET["concatenation"])) {
                    include "./pages/concatenation.php";
                } elseif (isset($_GET["loop"])) {
                    include "./pages/loop.php";
                } elseif (isset($_GET["function"])) {
                    include "./pages/function.php";
                } elseif (isset($_GET["del"])) {
                    include "./pages/del.php";
                } else {
                    include "./pages/home.php";
                }
                ?>
            </div>
        </div>
    </div>

    <?php include "./includes/footer.inc.php"; ?>
</body>

</html>