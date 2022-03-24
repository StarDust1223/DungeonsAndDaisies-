<?php
include("../functions.php");
damage(30);

$actions = [
    "ataci" => rand(-10,10),
    "fugi"=> rand(0,10),
    "ascunzi"=>0

];
proceseaza($actions, "cap2", "cap3");

?>

<?php include("../templates/header.php")?>
<h1>Ti-a iesit in cale o tornada mica! Ea te rastoarna pentru -30hp!</h1>
    <h4>Ai ales:<?php echo $_SESSION["cap1"]["cefaci"] . $_SESSION["cap1"]["damage"]?> </h4>
    <div class="alert alert-primary" role="alert">
            <?php viata()?>
        </div>
        <div class="row">
            <div class="col">
            <?php formular(array_keys($actions)) ?>
            </div>
            <div class="col">
            <img class="img img-responsive" src="../images/tornado.jpg" alt="Tornada">
            <?php imagine("princess.jpg", "Printesa") ?>
            </div>
        </div>
    <?php include("../templates/footer.php")?>