<!DOCTYPE html>
<html>
<body>

<?php
$txt = "PHP";
echo "I love $txt!";
 
$txt = "W3Schools.com";
echo "I love $txt!";

$x = 5; 

function myTest() {
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";


$t = 14;

if ($t < 20) {
  echo "Have a good day!";
}

for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";

}

$a = 5;

if ($a < 10) $b = "Hello";

echo $b

for($x=2:$x<=200;$x++){
    echo "hello world :"
}


$cars = array("Volvo", "BMW", "Toyota");
echo $cars[0];

$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

$mates = array("red", "cyan", "blue");
echo count($mates);


for ($row = 0; $row < 4; $row++) {
  echo "<p><b>clan number $row</b></p>";
  echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$mates[$row][$col]."</li>";
    }
  echo "</ul>";
}
?>


 

</body>
</html>


