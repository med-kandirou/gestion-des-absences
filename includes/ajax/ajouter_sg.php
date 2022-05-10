<?php
require_once '../config.inc.php';

$mat=$_POST["mat"];
$cin=$_POST["cin"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$password=$_POST["password"];

$sql="INSERT INTO `personnel`(`mat`, `cin`, `nom`, `prenom`, `poste`, `password`) VALUES ('".$mat."','".$cin."','".$nom."','".$prenom."','SG','".$password."')";
$res=$conn->query($sql);
if ($res===TRUE) {
  echo 'succes';
 } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
 }

?>