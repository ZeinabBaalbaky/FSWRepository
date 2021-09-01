<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["gender"]);
session_destroy();
header("Location:index.php");
?>