<?php

$strings = array ('Saya adalah Abdullah','Saya punya seekor kucing yang sangat lucu','Setiap hari ku ajak dia bermain');
$search = array ('Abdullah','kucing','lucu','bermain');
$replace = array ('Abdurrahman','bebek','gemuk','berenang');

$ganti = str_replace ( $search, $replace, $strings );
foreach ($ganti as $key => $value) {
echo $value."<br>";
}
?>