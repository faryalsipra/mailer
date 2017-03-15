<?php
session_start();
?>
<html>
<head>
<Title>
Login</Title>    
</head>
<body>
        <?php

$U=$_GET["username"];
$P=$_GET["password"];
$_SESSION["U"] = $U;
$_SESSION["P"] = $P;
header("location:Main.php");
?>

        </body>
</html>