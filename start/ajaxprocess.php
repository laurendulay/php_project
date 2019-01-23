<?php

$e = $_POST['event'];
$b = S_POST['date'];
//echo $n .'<br>'. $g;
$d = file_get_contents('ppl.json');
$d = json_decode($d, true);
$i = count($d);
++i;
$a = [
   "id" => $i,
   "event" => $e,
   "date" => $b
];
array_push($d, $a);
$d = json_encode($d);
file_put_contents('ppl.json', $d);
//print_r($d);
//print_r($FILES['photo']);
$t = $_FILES = ['photo']['tmp_name'];
$p = 'img/'.$i.'.jpg';
move_uploaded_file($t, $p);

?>