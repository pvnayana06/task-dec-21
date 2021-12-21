<!DOCTYPE html>

<?php
session_start();
$_SESSION["firstname"] = "Nayana";
$_SESSION["lastname"] = "P V";
$_SESSION["place"] = "Kochi";

?>

<html>
<body>

<?php
echo 'Hi, ' . $_SESSION["firstname"] . ' ' . $_SESSION["lastname"];
echo "<br><br>"; 
echo 'I am from ' . $_SESSION["place"];
?>

</body>
</html>