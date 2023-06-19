<?php
$data = "hello world";

echo "Original data: " . $data , "<br>";

echo "<br>Convert above string to HEX: <br>";
$hex = bin2hex($data);
echo  $hex;
echo "<br><br>Convert HEX back to string: <br>";
$b2ascii = hex2bin($hex);
echo $b2ascii;

function ascii2hex2($arg){
   return implode(" ",array_map(fn($x) => sprintf("%02s",strtoupper(dechex(ord($x)))),str_split($arg)));
}

function ascii2hex($ascii) {
  $hex = '';
  for ($i = 0; $i < strlen($ascii); $i++) {
    $byte = strtoupper(dechex(ord($ascii[$i])));
    $byte = str_repeat('0', 2 - strlen($byte)).$byte;
    $hex.=$byte." ";
  }
  return $hex;
}

function hex2str($hex) {
    $str = '';
    for($i=0;$i<strlen($hex);$i+=2) $str .= chr(hexdec(substr($hex,$i,2)));
    return $str;
}


?>