$(function(){  
   
    //get all sections 
    var stagaireClickMenu=$("#stagiaireSection");
    var DiscSection=$("#DiscSection");
    var acceuilSection=$("#acceuilSection");
    var impExp=$("#impExp");

    var consultStag=$("#aa");
    var Discip=$("#bb");
    var acceuil=$("#acceuil");
    var ie=$("#ie");
    
    var pageTitle=$("#pageTitle");
    //acceuil title  page by default
    pageTitle.text("Acceuil")
    // remove attr / show pages onclick
    stagaireClickMenu.click(function () { 
        consultStag.removeAttr("style");
        Discip.attr("style", "display: none;");
        acceuil.attr("style", "display: none;");
        ie.attr("style", "display: none;");
        pageTitle.text("Consultation d'absence");
    });
    DiscSection.click(function () { 
        Discip.removeAttr("style");
        consultStag.attr("style", "display: none;");
        acceuil.attr("style", "display: none;");
        ie.attr("style", "display: none;");
        pageTitle.text("Discipline");
    }); 
    acceuilSection.click(function () { 
        acceuil.removeAttr("style");
        Discip.attr("style", "display: none;");
        ie.attr("style", "display: none;");
        consultStag.attr("style", "display: none;");
        pageTitle.text("Acceuil");
    }); 
    impExp.click(function () { 
        ie.removeAttr("style");
        Discip.attr("style", "display: none;");
        consultStag.attr("style", "display: none;");
        acceuil.attr("style", "display: none;");
        pageTitle.text("Importer / Exporter");
    }); 

    //table Stagaiaire
    var cefStg='';
    $("#groupe").change(function () {  
        $('#dataTableCont').html('<table class="table my-0" id="dataTable"><thead><tr><th>cef</th><th>nom</th><th>prenom</th> </tr></thead><tbody id="tableBody"></tbody></table>');
        $.post(
            "../includes/ajax/stagiaireTable.php",
            {grp:$("#groupe").val()},
            function (data, textStatus, jqXHR) { 
                var stagiaireTable=[];
                var lignes=data.split("@");
                lignes.pop();
                for(var ligne in lignes){
                    var arr=lignes[ligne].split("/");
                    stagiaireTable.push(arr);
                    // console.log(arr);
                }

                for(var i = 0; i < stagiaireTable.length; i++) {
                    const trnode = document.createElement("tr");  
                    document.getElementById("tableBody").appendChild(trnode);
                    for(var j = 0; j < stagiaireTable[i].length; j++) {
                        const tdnode = document.createElement("td");
                        const textnode = document.createTextNode(stagiaireTable[i][j]);   
                        tdnode.appendChild(textnode);
                        trnode.appendChild(tdnode);
                        if(j == stagiaireTable[i].length-1){ 
                            const node = document.createElement("button");
                            const textnode = document.createTextNode("Consulter");
                            node.setAttribute('id','showStgInfo');
                            node.setAttribute('value',stagiaireTable[i][0]);
                            node.appendChild(textnode);
                            const tdnode = document.createElement("td");
                            tdnode.appendChild(node);
                            trnode.appendChild(tdnode);
                            
                            node.addEventListener("click",function(){
                                $("#absenceStagiaire").removeClass("d-none");
                                $("#lstStagiaire").addClass("d-none");
                                $("#absenceStagiaire").addClass("showClass");
                                cefStg=node.value;
                                getAbsence(cefStg);
                            })
                        }
                    }
                }

        }
        );
        
    });
    $("#goBack").click(function () { 
        $("#lstStagiaire").removeClass("d-none");
        $("#absenceStagiaire").addClass("d-none");
        $("#lstStagiaire").addClass("showClass");
        $("#absenceStagiaire").removeClass("showClass");
        
    });
    //Liste absence
    function getAbsence(stgcef){
        $.post("../includes/ajax/getAbsence.php", {cef:stgcef},
        function (data, textStatus, jqXHR) {
            $("#tableAbsence").html(data);
            // console.log("success");
        }
    ).fail(function(){
        console.log("failed");
    }); 
    }

    // rechercher absence
    $("#btnsearch").click(function() {
        if($("#txtDateAbs").val()==''){
            $("#tableAbsence").html('saisi une valide date');
        }else{
            $.post("../includes/ajax/searchAbsence.php", {dateAbsence:$("#txtDateAbs").val(),cef:cefStg},
                function (data, textStatus, jqXHR) {
                    $("#tableAbsence").html(data);
                    console.log("success");
                }
            ).fail(function(){
                console.log("failed");
            });  
    }
    })
   
  
})