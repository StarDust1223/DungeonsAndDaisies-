<?php
include ("../functions.php");
$request = isset($_POST)?$_POST:null;
if($request){
    header("Location: ../index");
}
?>

<?php include("../templates/header.php")?>

    <h1>Ai murit :(</h1>
    <h3>Vrei sa incerci din nou?</h3>
    <img class="img img-responsive" src="images/ded.jpg" alt="oof :(">
    <a href="../index.php" rel="noopener noreferrer">Incearca din nou</a>
    <?php include("../templates/footer.php")?>