<?php
include ("../functions.php");
damage(15);
$actions = [
    "ataci" => rand(-10,10),
    "fugi"=> rand(0,10),
    "ascunzi"=>0,
    "plec"=>10,
    "plangi"=>-10

];
proceseaza($actions, "cap1", "cap2");
?>
<?php include("../templates/header.php")?>

<h1>Ti-a iesit in cale o arahnida uriasa! Arahnida uriasa te-a muscat pentru -15 hp!</h1>
    <div class="alert alert-primary" role="alert">
            <?php viata()?>
        </div>
        <div class="row">
            <div class="col">
            <?php formular(array_keys($actions)) ?>
            </div>
            <div class="col">
            <?php imagine("arahnida.jpg", "arahnida") ?>
            </div>
        </div>
<?php include("../templates/footer.php")?>