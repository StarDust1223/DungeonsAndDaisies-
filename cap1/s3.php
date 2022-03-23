<?php
include ("../functions.php");
$request = isset($_POST)?$_POST:null;
$_SESSION["cap1"]=$request;
if($request){
    //aici tratam formularul
    if($request["cefaci"]==="accepti"){
        $_SESSION["cap1"]["damage"]=damage(-5);
    }
    if($request["cefaci"]==="refuzi"){
        $_SESSION["cap1"]["damage"]=damage(0);
    }
    if($request["cefaci"]==="injuri"){
        $_SESSION["cap1"]["damage"]=damage(35);
    }
    finish("../cap2");
    //header("Location: ../cap2");
}
?>

<?php include("../templates/header.php")?>

<h1>Ti-a iesit in cale o printesa! Printesa te trimite sa ii recuperezi bijuteriile pentru +5 hp!</h1>
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