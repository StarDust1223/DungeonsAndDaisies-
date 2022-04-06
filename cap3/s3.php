<?php
include ("../functions.php");
$actions = [
    "accepti" => -30,
    "refuzi"=> 0,
    "injuri"=>rand(0,10)

];
proceseaza($actions, "cap3", "cap4");
score();
?>

<?php include("../templates/header.php")?>

<h4>Ai ales:<?php echo $_SESSION["cap2"]["cefaci"] . $_SESSION["cap2"]["damage"]?> </h4>
<h1>Ti-a iesit in cale o batranica! Ea vrea sa te ude pentru +30 hp!</h1>
<div class="alert alert-primary" role="alert">
            <?php viata()?>
        </div>
        <div class="row">
            <div class="col">
            <?php formular(["accepti", "refuzi", "injuri"]) ?>
            </div>
            <div class="col">
            <img class="img img-responsive" src="../images/oldLady.jpg" alt="Batranica">
            </div>
        </div>
    <?php include("../templates/footer.php")?>