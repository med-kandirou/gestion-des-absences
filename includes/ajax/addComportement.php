<?PHP 
require "../config.inc.php";
try{
$conn->begin_transaction();

$cef=$_POST["cef"];
$motif=$_POST["motif"];
$querySanction="INSERT into sanction(motif,decision,type_motif) VALUES(?,'Mise en garde','Comportement');";
$queryAppliquer="INSERT into appliquer(cef_stgr,id_sanction,date_application) VALUES(?,?,?);";
$queryPrendre=("INSERT INTO `prendre`(`id_sanction`, `id_personnel`) VALUES (?,?)");

$stmt=$conn->prepare($querySanction);
$stmt->bind_param("s",$motif);
$stmt->execute();

$last_id = $conn->insert_id;

$stmt2=$conn->prepare($queryAppliquer);
$stmt2->bind_param("sss",$cef,$last_id,date("Y-m-d"));
$stmt2->execute();

$stmt3=$conn->prepare($queryPrendre);
$stmt3->bind_param("ss",$last_id,$_SESSION['mat']);
$stmt3->execute();

$conn->commit();
echo 'succes';
}catch(Exception $e){
 $conn->rollback();
}