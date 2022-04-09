<?php
$str = 'My Password';
$user = 'username';
echo sprintf("password md5 dari %s adalah: %s\n", $str, md5($str.$user));
echo '<br>';
echo sprintf("password sha1 dari %s adalah: %s\n",$str, sha1($str.$user));
echo '<br>';
echo sprintf("password gost dari %s adalah: %s\n",$str, hash('gost',
$str.$user));
echo '<br>';
?>