<?php 
require_once '../config.inc.php';
try{
        
    $f=$_POST['group'];
    echo '<table class="table my-0" id="dataTable">
    <thead>
        <tr>
            <th>cef</th>
            <th>nom</th>
            <th>prenom</th>         
            
        </tr>
    </thead>
    <tbody>';
    
   $res= $conn->query("SELECT Numero_stagiaire,Nom,Prénom FROM `stagiaire` WHERE Groupe='".$f."'");
    if($res->num_rows>0){
        while($row=$res->fetch_assoc()){
            echo "<tr>
            <td> <a id='showStgInfo'>".$row['Numero_stagiaire']."</a></td>
            <td>".$row['Nom']."</td>
            <td>".$row['Prénom']."</td> 
        </tr>";
        }
    }
    echo "</tbody>
    </table>";
} 
catch(Exception $e){
echo $e->getMessage();
}