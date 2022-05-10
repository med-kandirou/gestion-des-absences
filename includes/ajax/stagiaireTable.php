<?php 
require "../config.inc.php";
$grp=$_POST['grp'];
try{
    
    $query="SELECT cef ,nom ,prenom FROM stagiaire where groupe='".$grp."';";
   $res= $conn->query($query);
    if($res->num_rows>0){
        while($row=$res->fetch_assoc()){
            echo $row['cef'].'/'.$row['nom'].'/'.$row['prenom'].'@';
            // echo var_dump($jsonRow);
        }
    }
    
} 
catch(Exception $e){
echo $e->getMessage();
}