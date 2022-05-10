<?php 
require "../config.inc.php";
$cef=$_POST['cef'];
try{
    
    $query="SELECT cef ,nom ,prenom,filiere,groupe,annee_etude FROM stagiaire where cef='".$cef."';";
   $res= $conn->query($query);
    if($res->num_rows>0){
        echo '<label>Information du Stagiaire : </label>
    <table id="tableInfo" class="table table-responsive">
    <tr>
        <th>cef</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Filiere</th>
        <th>Groupe</th>
        <th>Annee d\'etude</th>
    </tr><tr>';
        while($row=$res->fetch_assoc()){
            echo '
            <td>'.$row["cef"].'</td>
            <td>'.$row["nom"].'</td>
            <td>'.$row["prenom"].'</td>       
            <td>'.$row["filiere"].'</td>
            <td>'.$row["groupe"].'</td>
            <td>'.$row["annee_etude"].'</td>                            
        ';  
        }
        echo "</tr> </table>";

        getHistory();

    }else{
        echo"ce stagiaire est introuavable";
    }
    
    
} 
catch(Exception $e){
echo  $e->getMessage();
}


function getHistory(){
    global $conn;
    global $cef;
    try{
        $query="select motif,type_motif,decision from sanction inner join appliquer on sanction.id_sanction=appliquer.id_sanction where type_motif='comportement' and appliquer.cef_stgr='".$cef."';";
       $res= $conn->query($query);
        if($res->num_rows>0){
            echo '  <label>Historique de comportement</label>
            <table id="compHistory" class="table table-responsive">
                <tr>
                <th>motif</th>
                <th>Decision</th>
                <th>Type de motif</th>
            </tr> '
                ;
            while($row=$res->fetch_assoc()){
                echo '<tr>
                <td>'.$row["motif"].'</td> 
                <td>'.$row["decision"].'</td>
                <td>'.$row["type_motif"].'</td>                           
            </tr>';  
            }
            echo " </table>";
        }else{
            echo"pas de comportement";
        }   
    } 
    catch(Exception $e){
    echo  $e->getMessage();
    }
    
}
