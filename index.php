<?php
$data = "hello world";

echo "Original data: " . $data , "<br>";

echo "<br>Convert above string to HEX: <br>";
$hex = bin2hex($data);
echo  $hex;
echo "<br><br>Convert HEX back to string: <br>";
$string = hex2bin($hex);
echo $string;

?>
