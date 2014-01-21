$(function(){
    function afficher(){
    document.getElementById("contact").style.display="inline";
    return false;
    }

    function validation(){
        document.getElementById("validation").style.display="inline";
        return false;
    }


    function validationSupp(){
        document.getElementById("validationSupp").style.display="inline";
        return false;
    }

    
    
    $('#amodif').click(validation);
    $('#asuppr').click(validationSupp);
     $('#aaffiche').click(afficher);
})
function validationMesAnnonces(){
        document.getElementById("validationMesAnnonces").style.display="inline";
        return false;
    }