<div class="container navForm px-1 py-5 mx-auto">
<div class="row d-flex  justify-content-center" >
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center"  >
            <div class="cardd card">
                <div class="form-card">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Ajouter</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">comportement</button>
                          </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              
                            <div class="row justify-content-between text-left">

                            <form method="post">
                            <label ID="Label1"  Text="Les Informations Personnelles"></label>
                            <div class="row justify-content-between text-left">

                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                    <label class="form-control-label px-3">Matricule<span class="text-danger"> *</span></label>
                                    <input type="text" id="txtmatr" required> 
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> 
                                    <label class="form-control-label px-3">CIN<span class="text-danger"> *</span></label>
                                    <input type="text" id="txtCIN" required> 
                                </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> 
                                    <label class="form-control-label px-3">Nom<span class="text-danger"> *</span></label> 
                                    <input type="text" id="txtNom" required> 
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> 
                                    <label class="form-control-label px-3">Prenom<span class="text-danger"> *</span></label> 
                                    <input type="text" id="txtPrenom" required> 
                                </div>
                            </div>

                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-12">
                                    <button type="submit" id="Button1"  class="btn-block btn-primary">Ajouter</button>

                                </div>
                            </div>
                            </form>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                           <form id="formComp">
                               
                                <div id="recherchConatainer" class="form-group col-sm-6 flex-column d-flex"> 
                                        <div class="text-md-end dataTables_filter" id="dataTable_filter">
                                                <label class="form-label">
                                                    <input type="search" id="txtCef" class="form-control form-control-sm" name="txtCef" placeholder="CEF" required> 
                                                </label>
                                        </div>
                                    <button type="button" id="btnFind" name="btnFind">rechercher <i class="fa fa-search" aria-hidden="true"></i> </button>
                                </div>
                                
                               <div id="stginfo">
                                   <!-- information du stagiaire -->

                               </div>
                               <div id="compContainer">
                                <!-- historique comportement -->
                               </div>                                
                                <div id="cont">
                                 <label for="motifArea">Description de motif:</label> <textarea name="motifArea" id="motifArea" cols="20" rows="3"></textarea>
                                
                                </div>
                                <button type="button" id="btnsubmit" name="btnsubmit">Validé</button>
                            </form>
                       
                          </div>
                        </div>   
                    </div>
            </div>
        </div>
    </div>
</div>
