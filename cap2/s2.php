<?php
include("../functions.php");
damage(5);
$request = isset($_POST)?$_POST:null;
$_SESSION["cap2"]=$request;
if($request){
    if($request["cefaci"]==="ataci"){
       $_SESSION["cap2"]["damage"]=damage(rand(-10,10));
    }
    if($request["cefaci"]==="fugi"){
        $_SESSION["cap2"]["damage"]=damage(rand(0,10));
    }
    if($request["cefaci"]==="ascunzi"){
        $_SESSION["cap1"]["damage"]=damage(0);
    }
    finish("../cap3");
}

?>

<?php include("../templates/header.php")?>

<h4>Ai ales:<?php echo $_SESSION["cap1"]["cefaci"] . $_SESSION["cap1"]["damage"]?> </h4>
<h1>Ti-a iesit in cale un copil! Copilul iti rupe o frunza pentru -5hp!</h1>
<div class="alert alert-primary" role="alert">
            <?php viata()?>
        </div>
        <div class="row">
            <div class="col">
            <form action= "" method= "POST">
                <label for="cefaci">Ce faci? </label>
                <select name="cefaci" id="cefaci" class="form-control">
                    <option value="ataci">ataci</option>
                    <option value="fugi">fugi</option>
                    <option value="ascunzi">te ascunzi</option>
                </select>
                <button class="btn btn-info mt-3" type="submit">Actioneaza!</button>
            </form>
            </div>
            <div class="col">
            <img class="img img-responsive" src="../images/kid.jpg" alt="Copil >:[">
            </div>
        </div>
    <?php include("../templates/footer.php")?>