<?php
include ("../functions.php");
damage(49);
$request = isset($_POST)?$_POST:null;
$_SESSION["cap4"]=$request;
if($request){
    //aici tratam formularul
    if($request["cefaci"]==="ataci"){
       $_SESSION["cap4"]["damage"]=damage(rand(-10,10));
    }
    if($request["cefaci"]==="fugi"){
        $_SESSION["cap4"]["damage"]=damage(rand(0,10));
    }
    if($request["cefaci"]==="ascunzi"){
        $_SESSION["cap4"]["damage"]=damage(0);
    }
    finish("../cap5");
    //header("Location: ../cap2");
}
?>

<?php include("../templates/header.php")?>

<h4>Ai ales:<?php echo $_SESSION["cap3"]["cefaci"] . $_SESSION["cap3"]["damage"]?> </h4>

    <h1>Ti-a iesit in cale ierbicid. Te usuci pentru -49 hp</h1>
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