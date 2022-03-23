<?php
include("../functions.php");
$request = isset($_POST)?$_POST:null;
$_SESSION["cap2"]=$request;
if($request){
    //aici tratam formularul
    if($request["cefaci"]==="accepti"){
        $_SESSION["cap2"]["damage"]=damage(-17);
    }
    if($request["cefaci"]==="refuzi"){

        $_SESSION["cap2"]["damage"]=damage(0);
    }
    if($request["cefaci"]==="injuri"){
        $_SESSION["cap2"]["damage"]=damage(35);
    }
    finish("../cap3");
    //header("Location: ../cap2");
}

?>
<?php include("../templates/header.php")?>

<h4>Ai ales:<?php echo $_SESSION["cap1"]["cefaci"] . $_SESSION["cap1"]["damage"]?> </h4>
<h1>Ti-a iesit in cale o albina! Ea te roaga sa ii dai nectarul tau la schimb pentru 17 hp!</h1>
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