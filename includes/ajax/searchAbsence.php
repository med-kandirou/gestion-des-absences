<?php 
require "../config.inc.php";
$cef=$_POST['cef'];
$dateAbs=$_POST['dateAbsence'];
 try{
    echo '<table class="table my-0" id="absenceTable">
    <thead>
        <tr>
            <th>CEF stagaire</th>
            <th>date debut</th>
            <th>date fin</th>             
        </tr>
    </thead>
    <tbody>';
    
    $query="SELECT id_stagiaire,date_debut_absence,date_fin_absence FROM absence WHERE id_stagiaire='".$cef."' AND DATE(date_debut_absence) = '".$dateAbs."';";

   $res= $conn->query($query);
    if($res->num_rows>0){
        while($row=$res->fetch_assoc()){
            echo "<tr>
            <td>".$row['id_stagiaire']."</td>
            <td>".$row['date_debut_absence']."</td>
            <td>".$row['date_fin_absence']."</td>
        </tr>";
        }
    }else{
        echo 'pas d\'absence dans cette date';
    }
    echo "</tbody>
    </table>";
} 
catch(Exception $e){
echo $e->getMessage();
}