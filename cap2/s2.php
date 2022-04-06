<?php
include("../functions.php");
damage(5);
$actions = [
    "ataci" => rand(-10,10),
    "fugi"=> rand(0,10),
    "ascunzi"=>0

];
proceseaza($actions, "cap2", "cap3");
score();
?>

<?php include("../templates/header.php")?>

<h4>Ai ales:<?php echo $_SESSION["cap1"]["cefaci"] . $_SESSION["cap1"]["damage"]?> </h4>
<h1>Ti-a iesit in cale un copil! Copilul iti rupe o frunza pentru -5hp!</h1>
<div class="alert alert-primary" role="alert">
            <?php viata()?>
        </div>
        <div class="row">
            <div class="col">
            <?php formular(["ataci", "fugi", "ascunzi"]) ?>
            </div>
            <div class="col">
            <img class="img img-responsive" src="../images/kid.jpg" alt="Copil >:[">
            </div>
        </div>
    <?php include("../templates/footer.php")?>