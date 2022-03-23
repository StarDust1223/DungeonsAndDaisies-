<?php
include ("../functions.php");
$request = isset($_POST)?$_POST:null;
$_SESSION["cap3"]=$request;
if($request){
    //aici tratam formularul
    if($request["cefaci"]==="accepti"){
        $_SESSION["cap3"]["damage"]=damage(-30);
    }
    if($request["cefaci"]==="refuzi"){
        $_SESSION["cap3"]["damage"]=damage(0);
    }
    if($request["cefaci"]==="injuri"){
        $_SESSION["cap3"]["damage"]=damage(35);
    }
    finish("../cap4");
    //header("Location: ../cap2");
}
?>

<?php include("../templates/header.php")?>

<h4>Ai ales:<?php echo $_SESSION["cap2"]["cefaci"] . $_SESSION["cap2"]["damage"]?> </h4>
<h1>Ti-a iesit in cale o batranica! Ea vrea sa te ude pentru +30 hp!</h1>
<form action= "" method= "POST">
    <label for="cefaci">Ce faci? </label>
    <select name="cefaci" id="cefaci">
        <option value="accepti">accepti</option>
        <option value="refuzi">refuzi</option>
        <option value="injuri">injuri</option>
    </select>
    <button type="submit">Actioneaza!</button>
    </form>
    <?php include("../templates/footer.php")?>