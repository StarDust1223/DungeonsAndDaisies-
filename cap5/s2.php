<?php
include ("../functions.php");
damage(25);
$actions = [
    "ataci" => rand(-10,10),
    "fugi"=> rand(0,10),
    "ascunzi"=>0

];
proceseaza($actions, "cap5", "final/bine.php");
?>

<?php include("../templates/header.php")?>

<h4>Ai ales:<?php echo $_SESSION["cap4"]["cefaci"] . $_SESSION["cap4"]["damage"]?> </h4>
<h1>A inceput sa bata crivatul! Iti degera frunzele pentru -25 hp!</h1>
<div class="alert alert-primary" role="alert">
            <?php viata()?>
        </div>
        <div class="row">
            <div class="col">
            <?php formular(["ataci", "fugi", "ascunzi"]) ?>
            </div>
            <div class="col">
            <img class="img img-responsive" src="../images/crivat.jpg" alt="Crivat">
            </div>
        </div>
    <?php include("../templates/footer.php")?>