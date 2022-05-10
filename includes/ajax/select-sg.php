<?php
require_once '../config.inc.php';

$sg=$_POST["sg"];


$sql="SELECT `mat`, `cin`, `nom`, `prenom`, `poste`, `password` FROM `personnel` WHERE poste='SG' and mat='".$sg."'";
$res=$conn->query($sql);
 if ($res->num_rows > 0) {
    while($row = $res->fetch_assoc()) {
        $arr = array('mat' => $row['mat'] , 'cin' => $row['cin'], 'nom' => $row['nom'], 'prenom' =>$row['prenom'] , 'password' => $row['password']);
        echo json_encode($arr);
    }
  } else {
    echo "0 results";
  }

?>