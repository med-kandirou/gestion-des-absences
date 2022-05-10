<div class="container card px-1 py-5 mx-auto">
  <div class="row d-flex  justify-content-center">
      <div class=" text-center">
        <form >   
          <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-abs-tab" data-bs-toggle="tab" data-bs-target="#nav-abs" type="button" role="tab" aria-controls="nav-abs" aria-selected="true">Absence Notification</button>
                  <button class="nav-link" id="nav-comp-tab" data-bs-toggle="tab" data-bs-target="#nav-comp" type="button" role="tab" aria-controls="nav-comp" aria-selected="false">Ajouter Comportement</button>
              </div>
          </nav>
              <div class="tab-content" id="nav-tabContent">                          
                <div class="tab-pane fade " id="nav-comp" role="tabpanel" aria-labelledby="nav-comp-tab">
                <div class="row d-flex  justify-content-center">
                  <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                      <div class="card">
                        <input name="CEF" type="text" placeholder="Entrer CEF..." id="cef"> <input type="button" class="btn btn-primary" value="Rechercher" id="cherche-stg"></br> </br>               
                        <div id="motifinfo">


                        </div>
                        <div id="add_motif" class="d-none">
                          <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                    <label class="form-control-label px-3">Motif<span class="text-danger"> *</span></label> 
                                    <textarea id="description_motif" cols="30" rows="1"></textarea>
                                    
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label invisible  px-3">*Desicion</label> 
                                    <select id="Desicion">
                                      <option selected="selected"><--Select--></option>
                                      <option value="Averstissement">Averstissement</option>
                                      <option value="Blame">Blâme</option>
                                      <option value="Exclusion de 2 jours">Exclusion de 2 jours</option>
                                      <option value="Exclusion Definitive">Exclusion Définitive</option>
                                </select>
                            </div>
                        </div>   
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex"> 
                                    <input type="button" class="btn btn-primary" id="add-compot" value="Envoyer">                                    
                                </div>
                        </div>   
                        </div>              
                                            
                      </div>  
                  </div>
                </div>
                </div>  
                <div class="tab-pane fade show active" id="nav-abs" role="tabpanel" aria-labelledby="nav-abs-tab">
                  <table class="table table-responsive table-striped">
                    <tr class="table-light">
                      <th>Fillière</th>
                      <th>Groupe</th>
                      <th>Cef</th>
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Motif</th>
                      <th>Desicion</th>
                      <th>Accepter</th>
                      <th>Refuser</th>
                    </tr>
                    <tr>
                      <td>Tdi</td>
                      <td>Tdi103</td>
                      <td>1999090600366</td>
                      <th>Ouabi</th>
                      <th>Ayoub</th>
                      <th>1 journee d'absence</th>
                      <th>1ere mise en garde</th>
                      <th><button type="submit" id="Button1"  class="btn-block btn-primary">Accepter</button> </th>
                      <th><button type="submit" id="Button1"  class="btn-block btn-primary">Refuser</button> 
                    </tr> 
                  </table> 
                
                </div>
              </div>
        </form>
    </div>
  </div>
</div>