<?php
include ("../functions.php");
damage(49);
$actions = [
    "ataci" => rand(-10,10),
    "fugi"=> rand(0,10),
    "ascunzi"=>0

];
proceseaza($actions, "cap4", "cap5");
score();
?>

<?php include("../templates/header.php")?>

<h4>Ai ales:<?php echo $_SESSION["cap3"]["cefaci"] . $_SESSION["cap3"]["damage"]?> </h4>

    <h1>Ti-a iesit in cale ierbicid. Te usuci pentru -49 hp</h1>
    <div class="alert alert-primary" role="alert">
            <?php viata()?>
        </div>
        <div class="row">
            <div class="col">
            <?php formular(["ataci", "fugi", "ascunzi"]) ?>
            </div>
            <div class="col">
            <img class="img img-responsive" src="../images/ierbicid.png" alt="Ierbicid">
            </div>
        </div>
    <?php include("../templates/footer.php")?>