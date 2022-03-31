<?php
include ("../functions.php");
$request = isset($_POST)?$_POST:null;
if($request){
    session_destroy();
    header("Location: ../index");
  
}
?>

<?php include("../templates/header.php")?>

    <h1>FELICITARI</h1>
    <h2>Ai ajuns la finalul aventurii tale, si ai obtinut Coroana Tuturor Florilor!</h2>
    <h2>Scorul tau a fost <?php echo $_SESSION["score"]?></h2>
    <h3>Vrei sa joci din nou?</h3>
    <div class="col">
    <img class="img img-responsive" src="../images/crown.jpg" alt="Coroana">
            </div>

    <a href="../index.php" rel="noopener noreferrer">Incearca din nou</a>
    <?php include("../templates/footer.php")?>