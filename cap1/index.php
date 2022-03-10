<?php
session_start();
$pag= rand(1,3);
header("Location: s$pag.php");
?>