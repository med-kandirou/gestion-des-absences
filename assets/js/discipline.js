$(function(){ 
   
    $("#btnFind").click(function () { 
        if($("#txtCef").val()==''){
            $("#stginfo").html('saisi une valide CEF');
        }else{
            $.post("../includes/ajax/getComportement.php", {cef:$("#txtCef").val()},
                function (data, textStatus, jqXHR) {
                    $("#stginfo").html(data);
                },
            ).fail(function(){
                console.log("fail");
            });
        }
    });

    $("#btnsubmit").click(function () { 
       if($("#txtCef").val()=='' ||$("#motifArea").val()=='' ){
           alert("saisi tous les champs");
            return ;
       }else{
           $.post("../includes/ajax/addComportement.php",
           {cef:$("#txtCef").val(),motif:$("#motifArea").val()} ,
               function (data, textStatus, jqXHR) {
                if (data=='succes') {
                    alert('Indiscipline a ete bien ajoute');
                    $("#txtCef").val('');
                    $("#motifArea").val('');
                }
               
               }
           ).fail(function(){
                alert("dddd");
           });
       }
        
    });

})