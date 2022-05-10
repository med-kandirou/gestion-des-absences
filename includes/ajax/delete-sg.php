<?php
require_once '../config.inc.php';

$sg=$_POST["sg"];

$sql="DELETE FROM `personnel` WHERE mat='".$sg."'";
if ($conn->query($sql)===true) {
    echo 'succes';
}
 

?>