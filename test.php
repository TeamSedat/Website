<html>
<body>

Folgende Parameter wurden übertrage:<br>
POST<br> 
<?php 
echo "<br>";
foreach($_POST as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

<br>GET<br>
<?php 
/* print_r($_GET); */
echo "<br>";
foreach($_GET as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

</body>
</html>