<?php
include ("../functions.php");
$request = isset($_POST)?$_POST:null;
if($request){
    header("Location: ../index");
}
?>

<?php include("../templates/header.php")?>

    <h1>Ai murit :(</h1>
    <h2>Scorul tau a fost <?php echo $_SESSION["score"]?></h2>
    <h3>Vrei sa incerci din nou?</h3>
    <div class="col">
    <img class="img img-responsive" src="../images/ded.jpg" alt="oof :(">
            </div>

    <a href="../index.php" rel="noopener noreferrer">Incearca din nou</a>
    <?php include("../templates/footer.php")?>