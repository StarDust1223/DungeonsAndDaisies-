<?php
include ("../functions.php");
$actions = [
    "accepti" => rand(-10,10),
    "refuzi"=> rand(0,10),
    "injuri"=>0

];
proceseaza($actions, "cap1", "cap2");
?>

<?php include("../templates/header.php")?>

<h1>Ti-a iesit in cale o printesa! Printesa te trimite sa ii recuperezi bijuteriile pentru +5 hp!</h1>
<div class="alert alert-primary" role="alert">
            <?php viata()?>
        </div>
        <div class="row">
            <div class="col">
            <?php formular(array_keys($actions)) ?>
            </div>
            <div class="col">
            <?php imagine("princess.jpg", "Printesa") ?>
            </div>
        </div>
    <?php include("../templates/footer.php")?>