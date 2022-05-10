<div id="stagaireContainer">
    <div class="container-fluid">
        <h3 class="text-dark mb-4">Stagiaires</h3>
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-primary m-0 fw-bold">Liste des stagiaires</p>
            </div>
            <div class="card-body" id="lstStagiaire">
                <div class="row">
                    <div class="col-md-4 text-nowrap">
                        <div id="dataTable_length" class="dataTables_length"  aria-controls="dataTable"><label class="form-label">
                            <form method="POST">
                        <select class="d-inline-block form-select form-select-sm mb-6" id="groupe" name="groupe" >
                                    <option value="" disabled selected>Groupe</option>
                                    <!-- les groupes -->
                                    <?php
                                     require '../includes/config.inc.php';
                                     $query='select DISTINCT groupe FROM stagiaire';
                                     $stmt=$conn->query($query);
                                     if($stmt->num_rows>0){
                                         while($row=$stmt->fetch_assoc()){
                                             echo "<option value='".$row['groupe']."'>".$row['groupe']."</option>";
                                         }
                                     }
                                    ?>    
                            </select>
                        </form>
                        </label>
                        </div>
                    </div>

                    <!-- <div class="col-md-4">
                        <div class="text-md-end dataTables_filter" id="dataTable_filter">
                            <label class="form-label">
                                <input type="search"  class="form-control form-control-sm" aria-controls="dataTable" placeholder="Prénom">
                            </label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="text-md-end dataTables_filter" id="dataTable_filter">
                            <label class="form-label">
                                <input type="search"  class="form-control form-control-sm" aria-controls="dataTable" placeholder="Nom">
                            </label>
                        </div>
                    </div>
                    <button type="button" id="btnfindStagiaire" class="col-md-2 offset-7 btn">rechercher</button>
                </div> -->
                    <div class="table-responsive table mt-2" id="dataTableCont" role="grid" aria-describedby="dataTable_info">                   
                         <!-- table des stagiaires -->
                     </div>       
            </div>
        </div>
    </div>
</div>
<div id="absenceStagiaire" class='d-none'>
    <div class="container container-fluid">
        <div class="card shadow">
            <div class="card-header py-3">
                <p id="goBack"><- liste stagaire</p>
                <p class="text-primary m-0 fw-bold">Stagiaire <span id="stgnom"></span> </p>
                <div id="Certificats">
                    <div class="row" id="attContainer">
                        <form method="POST">
                            <label>Attestation scolaire</label>
                            <button id="btnattScolaire" class="offset-2">Telecharger</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="Absence">
                    <h2 id="absenceTitle">Absence</h2>
                    <div id="searchBar">
                        <form method="POST">
                            <label class="form-label">
                                <input id="txtDateAbs" name="txtDateAbs" placeholder="JJ/MM/AAAA" onfocus="(this.type='date')" onblur="(this.type='text')"/>
                            </label>      
                            <button type="button" name="btnsearch" id="btnsearch" class="offset-2">rechercher</button>
                        </form>
                    </div>
                    <div class="table-responsive table mt-2" id="tableAbsence" role="grid" aria-describedby="dataTable_info"">
                        <!-- table absence -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
