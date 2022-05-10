<?php 
require_once '../config.inc.php';
try{
        
    $f=$_POST['filliere'];
    
   $res= $conn->query("SELECT DISTINCT Groupe FROM `stagiaire` WHERE Filiere='".$f."'");
    if($res->num_rows>0){
        echo "<option selected='selected'>".'--Select Group--'."</option>";
        while($row=$res->fetch_assoc()){
            echo "<option >".$row['Groupe']."</option>";
        }
    }
    
} 
catch(Exception $e){
echo $e->getMessage();
}
?>