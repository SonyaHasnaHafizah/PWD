<?php
$a = "5";
$b = 5;

echo "$a == $b : ".($a == $b)."<br>";
echo "$a === $b : ".($a === $b)."<br>";
echo "$a != $b : ".($a != $b)."<br>"; //false karna tipe datanya tidak sama
echo "$a > $b : ".($a > $b)."<br>";
echo "$a >= $b : ".($a >= $b)."<br>";
echo "($a == $b) && ($a > $b) : ".(($a == $b) && ($a > $b))."<br>";
echo "($a == $b) || ($a > $b) : ".(($a == $b) || ($a > $b))."<br>";

?>