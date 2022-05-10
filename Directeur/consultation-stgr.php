

<div class="container-fluid">
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Stagiaire Info</p>
        </div>
        <div class="card-body">
            <div class="row">
            

                <div class="col-md-6 text-nowrap">
               <form method="POST">
                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><select name="filliere" id="filliere" class="d-inline-block form-select form-select-sm">
                    
                    <?php 
                        require_once '../includes/config.inc.php';     
                        $result = $conn->query('SELECT DISTINCT Filiere FROM `stagiaire`');

                        if ($result->num_rows > 0) {
                            echo "<option selected='selected'>".'--Select Filliere--'."</option>";
                            while($row = $result->fetch_assoc()) {
                                echo "<option >".$row['Filiere']."</option>";
                            }
                        } else {
                        echo "0 results";
                        }
                    ?>
                    </select>
                    </div>
                </form>  
                </div>
               
                <div class="col-md-6">
                    <div class="text-md-end dataTables_filter" id="dataTable_filter">
                        <select class="form-control form-control-sm" name="group" id="group">


                        </select>
                    </div>
                </div>
            </div>
            
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">

            
            </div>
        </div>
    </div>
</div>
            
        