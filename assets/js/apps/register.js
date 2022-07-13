function inputjobTypeChang() {
    document.getElementById('inputjobType').value;
    if(document.getElementById('inputjobType').value == 'บุคคลทั่วไป'){
        $('.inputjobTypeGuest').hide();
    }else{
        $('.inputjobTypeGuest').show();
    }
}

$(document).ready(function(){

    $('#inputLoginUsername').on('keyup',function(){
        if($.trim($(this).val()) != '' && $(this).val().length == 13){
        id = $(this).val().replace(/-/g,"");
        var result = Script_checkID(id);
        if(result === false){
            $('#inputLoginUsername').val('');
            var element = document.getElementById("inputLoginUsername");
            element.classList.add("is-invalid");
        }else{
            var element = document.getElementById("inputLoginUsername");
            element.classList.add("is-valid");
        }
        }else{
            var element = document.getElementById("inputLoginUsername");
            element.classList.remove("is-invalid");
            element.classList.remove("is-valid");
        }
    })
    });

    $(document).ready(function(){
    
    $('#inputPID').on('keyup',function(){
        if($.trim($(this).val()) != '' && $(this).val().length == 13){
        id = $(this).val().replace(/-/g,"");
        var result = Script_checkID(id);
        if(result === false){
            $('#inputPID').val('');
            var element = document.getElementById("inputPID");
            element.classList.add("is-invalid");
        }else{
            var element = document.getElementById("inputPID");
            element.classList.add("is-valid");
        }
        }else{
            var element = document.getElementById("inputPID");
            element.classList.remove("is-invalid");
            element.classList.remove("is-valid");
        }
    })
    });

    function Script_checkID(id){
        if(! IsNumeric(id)) return false;
        if(id.substring(0,1)== 0) return false;
        if(id.length != 13) return false;
        for(i=0, sum=0; i < 12; i++)
            sum += parseFloat(id.charAt(i))*(13-i);
        if((11-sum%11)%10!=parseFloat(id.charAt(12))) return false;
        return true;
    }
    function IsNumeric(input){
        var RE = /^-?(0|INF|(0[1-7][0-7]*)|(0x[0-9a-fA-F]+)|((0|[1-9][0-9]*|(?=[\.,]))([\.,][0-9]+)?([eE]-?\d+)?))$/;
        return (RE.test(input));
    }
