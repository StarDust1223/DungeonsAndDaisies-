<?php
include ("../functions.php");
damage(25);
$request = isset($_POST)?$_POST:null;
$_SESSION["cap5"]=$request;
if($request){
    //aici tratam formularul
    if($request["cefaci"]==="ataci"){
       $_SESSION["cap5"]["damage"]=damage(rand(-10,10));
    }
    if($request["cefaci"]==="fugi"){
        $_SESSION["cap5"]["damage"]=damage(rand(0,10));
    }
    if($request["cefaci"]==="ascunzi"){
        $_SESSION["cap5"]["damage"]=damage(0);
    }
    finish("../final/bine.php");
    //header("Location: ../cap2");
}
?>

<?php include("../templates/header.php")?>

<h4>Ai ales:<?php echo $_SESSION["cap4"]["cefaci"] . $_SESSION["cap4"]["damage"]?> </h4>
<h1>A inceput sa bata crivatul! Iti degera frunzele pentru -25 hp!</h1>
<form action= "" method= "POST">
    <label for="cefaci">Ce faci? </label>
    <select name="cefaci" id="cefaci">
        <option value="ataci">ataci</option>
        <option value="fugi">fugi</option>
        <option value="ascunzi">te ascunzi</option>
    </select>
    <button type="submit">Actioneaza!</button>
    </form>
    <?php include("../templates/footer.php")?>