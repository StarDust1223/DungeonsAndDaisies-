<?php
include("../functions.php");
damage(10);
$actions = [
    "ataci" => rand(-10,10),
    "fugi"=> rand(0,10),
    "maIngrop"=> 2,
    "beausuc"=>10,
    "ascunzi"=>0,
    "magie"=>32

];
proceseaza($actions, "cap1", "cap2");

include("../templates/header.php");
?>

    <h1>Ti-a iesit in cale o omida uriasa! Omida uriasa te-a muscat pentru -10 hp!</h1>
    <div class="alert alert-primary" role="alert">
            <?php viata()?>
        </div>
        <div class="row">
            <div class="col">
           <?php formular(array_keys($actions)) ?>
            </div>
            <div class="col">
            <?php imagine("omida.png", "omida") ?>
            </div>
        </div>
   
    <?php include("../templates/footer.php"); ?>
