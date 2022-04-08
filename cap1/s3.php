<?php
include ("../functions.php");
$actions = [
    "accepti" => -5,
    "refuzi"=> 0,
    "injuri"=>rand(0,10)

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