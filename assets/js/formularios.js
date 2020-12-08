$(document).ready(function () { 
    alert('con este alert si funciona');

    $('#iibbnoaplica').click(function(){
        if($(this).is(':checked')){
            
        } else {

        }
    });

    function gciasnoaplica(this){
        if($(this).is(':checked')){
            $("#ganancias").append("<option value='NO APLICA' >NO APLICA</option>")
            $("#ganancias option[value='NO APLICA']").attr("selected",true);
        } else {
            $("#ganancias").removeAttr('disabled');
            $("#ganancias option[value=0]").attr("selected",true);
        }
    }
    

})

