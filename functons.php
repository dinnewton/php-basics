<?php
//functions
$number = 100;

$root =sqrt($number);
echo $root;
echo "<br>";
echo sqrt(1000);
echo "<br>";
echo pow(2.4,5.1);// arguments
echo "<br>";
echo max(43, 67, 783, 836, 64, 6);
echo "<br>";
echo  min(76, 87, 64, 32, 23);


$x =63.74849;
    echo "<hr>";
    echo round($x);
    echo "<hr>";
    echo round($x, 3);
echo "<hr>";
echo floor($x);
echo "<hr>";
echo  ceil($x);

$sentence="The quick brown fox jumped over a lazy dog";
echo "<hr>";
echo strtoupper($sentence);
echo "<hr>";
echo strtoupper($sentence);
echo "<hr>";
echo ucwords($sentence);
echo str_word_count($sentence);
echo "<hr>";
echo strlen($sentence);
echo "<hr>";

$password = "p@55word";
echo md5($password);
echo "<hr>";
echo sha1($password);
//
echo "<hr>";
echo crypt($password,"wtgrfrfdrtweyghfbghggfrtryerrerfyr66rrrrrrrtuyrt754tuiyyyyyyyyyyyyyygdrrrrrrrrrrr");

//date
//files






