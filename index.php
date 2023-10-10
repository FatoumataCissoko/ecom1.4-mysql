<?php
$server = 'localhost';
$userName ="root";
$pwd = "";
$db = "ecom1";

$conn = mysqli_connect($server,$userName,$pwd,$db);
if ($conn){
    echo "Connected to the $db database successfully";
}else{
    echo "Error : Not connected to the $db database";
}
$results = mysqli_query($conn,"SELECT * FROM user");

?>