<?php
require_once '../config.inc.php';

$conn->begin_transaction();
try {
    $cef=$_POST["cef"];
    $desc_motif=$_POST["desc_motif"];
    $Desicion=$_POST["Desicion"];
    
    $conn->query("INSERT INTO `sanction`(`motif`, `decision`, `type_motif`) VALUES ('".$desc_motif."','".$Desicion."','comportement')");
    $last_id = mysqli_insert_id($conn);
    $date = date('y-m-d');
    $conn->query("INSERT INTO `appliquer`(`CEF_stgr`, `id_sanction`, `date_application`) VALUES ('".$cef."','".$last_id."','".$date."')");
    $conn->query("INSERT INTO `prendre`(`id_sanction`, `id_personnel`) VALUES ('".$last_id."','".$_SESSION['mat']."')");
    $conn->commit();

    echo 'succes';
} catch (mysqli_sql_exception $exception) {
    $conn->rollback();
}




?>