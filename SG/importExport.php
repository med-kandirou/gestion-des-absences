<?php
require "../includes/config.inc.php";

if(isset($_POST['but_import'])){
   $target_dir = "D:/";
   $target_file = $target_dir . basename($_FILES["importfile"]["name"]);

   $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

   $uploadOk = 1;
   if($imageFileType != "csv" ) {
     $uploadOk = 0;
   }

   if ($uploadOk != 0) {
      if (move_uploaded_file($_FILES["importfile"]["tmp_name"], $target_dir.'importfile.csv')) {

        // Checking file exists or not
        $target_file = $target_dir . 'importfile.csv';
        //$fileexists = 0;
        /*if (file_exists($target_file)) {
           $fileexists = 1;
        }*/
        if (file_exists($target_file)) {
           // Reading file
           $file = fopen($target_file,"r");
           $i = 0;
           $importData_arr = array();
                       
            while (($data = fgetcsv($file, 10000, ",")) !== FALSE) {
                $data = array_map("utf8_encode", $data);
                $num = count($data);
             
                for ($c=0; $c < $num; $c++) {
                    $importData_arr[$i][] = mysqli_real_escape_string($conn, $data[$c]);
                }
                $i++;
           }
           fclose($file);

           $skip = 0;
           // insert import data
           foreach($importData_arr as $data){
              if($skip != 0){
                 $Dept = $data[0];
                 $Code_EFP = $data[1];
                 $EFP = $data[2];
                 $Niveau = $data[3];
                 $Code_Filiere = $data[4];
                 $Filiere = $data[5];
                 $Type_Formation = $data[6];
                 $Groupe = $data[7];
                 $Annee_etude = $data[8];
                 $Numero_stagiaire = $data[9];
                 $Nom = $data[10];
                 $Prénom = $data[11];

                 // Checking duplicate entry
               //   $sql = "select count(*) as allcount from stagiaire";
               //   $retrieve_data = mysqli_query($con,$sql);
               //   $row = mysqli_fetch_array($retrieve_data);
               //   $count = $row['allcount'];

                //  if($count == 0){
                    // Insert record
                    $insert_query = "INSERT INTO `stagiaire`(`dep`, `code_efp`, `efp`, `niveau`, `code_filiere`, `filiere`, `type_formation`, `groupe`, `annee_etude`, `cef`, `nom`, `prenom`)  values('".$Dept."','".$Code_EFP."','".$EFP."','".$Niveau."','".$Code_Filiere."','".$Filiere."','".$Type_Formation."','".$Groupe."','".$Annee_etude."','".$Numero_stagiaire."','".$Nom."','".$Prénom."')";
                    mysqli_query($conn,$insert_query);
                //  }
              }
              $skip ++;
           }
           $newtargetfile = $target_file;
           if (file_exists($newtargetfile)) {
              unlink($newtargetfile);
           }
         }

      }
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>import/Export</title>
</head>
<body>
<div id="wholeWraper" class="popup_import">
 <form method="post" action="" enctype="multipart/form-data" id="import_form">
        <input type='file' name="importfile" id="importfile">
        <input type="submit" id="but_import" name="but_import" value="Import">
    </form>    
</div>
    
</body>
</html>
