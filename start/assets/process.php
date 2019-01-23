<?php
$name = $_POST['name'];
$date = $_POST['date'];
$photo = $_FILES['photo'];
$ptemp = $photo['tmp_name'];
$pfinal = $photo['name'];
move_uploaded_file($ptemp,$pfinal);

//echo $n . ' ' . $g;

$a = [
    "name" => $name,
    "date" => $date,
    "photo" => $pfinal
    
];


$d = file_get_contents('data.json');
$d = json_decode($d, true);

array_unshift($d, $a);

//print_r($d);

$d = json_encode($d);
$d = file_put_contents('data.json', $d);

header('location:../profile.php');
?>