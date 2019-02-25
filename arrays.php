<?php
//arrays
$names = ["Mary" ,"Musa" ,"Din" ,"jack" ,"Wils" ,"Bruk" ,"lucy"];
$ages = [17 ,45 ,82 ,16 ,4 ,54 ,43 ,100 ,82 ,63 ,75];
echo  $names [4] ;
echo $ages[0];

foreach($names as $jina)
{
    echo "$jina <br>";
}

echo "<hr>";
echo sizeof($names);//count the # of names
array_push($names , "lio");
echo sizeof($names);
echo "<hr>";
var_dump($names);
echo "<hr>";
array_pop($names);
echo "<hr>";
rsort($ages);
foreach ($ages as $miaka)
{
    echo "$miaka<br>";
}
echo "<hr>";
echo array_sum($ages);
echo "<hr>";
//associative array
$person =["names"=>"musa lio" ,"age"=>85, "color"=>"black"];
echo $person["names"];
echo "<hr>";
echo $person["age"];
echo "<hr>";
echo $person["color"];




