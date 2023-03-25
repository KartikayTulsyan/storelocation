<?php
$myfile = fopen("location.txt", "w");
$txt = "position:" . $_GET["position"];
fwrite($myfile, $txt);
fclose($myfile);


header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type");
echo "Position stored successfully.";

?>

