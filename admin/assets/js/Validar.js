function ValidarCampos(tela) {

    var tudoCerto = true;

    if (tela == 0) {

        if ($("#email").val() == "")
        {
            $("#campoemail").show();
            tudoCerto = false;
        } else {
            $("#campoemail").hide();
        }

        if ($("#senha").val() == "") {

            $("#camposenha").show();
            tudoCerto = false;
        } else {
            $("#camposenha").hide();
        }
    }
    else if(tela == 1){
        
        if ($("#campocat").val() == ""){
            
            $("#campocategoria").show();
            tudoCerto = false;
        }else{
            $("#campocategoria").hide();
        }
        
    }
    else if(tela == 2){
        
        if ($("#nome").val() == ""){
            $("#camponome").show();           
            tudoCerto = false;
        }else{
            $("#camponome").hide();
        }
        if ($("#endereço").val() == ""){
            $("#campoendereço").show();
            tudoCerto = false;
        }else{
            $("#campoendereço").hide();
        }
        if ($("#telefone").val() == ""){
            $("#campotelefone").show();
            tudoCerto = false;
        }else{
            $("#campotelefone").hide();
        }
    }
    
    else if(tela == 3){
        
        if ($("#nomecat").val() == ""){
            $("#ncategoria").show();           
            tudoCerto = false;
        }else{
            $("#ncategoria").hide();
        }
        
    }
    else if(tela == 4){
        if ($("#nemp").val() == ""){
            $("#nomeemp").show();
            tudoCerto = false;
        }else{
            $("#nomeemp").hide();
        }
        if ($("#endemp").val() == ""){
            $("#enderecoemp").show();
            tudoCerto = false;
        }else{
            $("#enderecoemp").hide();
        }
        if ($("#telemp").val() == ""){
            $("#telefoneemp").show();
            tudoCerto = false;
        }else{
            $("#telefoneemp").hide();
        }

    }
    else if(tela == 5){
        if ($("#altnome").val() == ""){
            $("#anome").show();
            tudoCerto = false;
        }else{
            $("#anome").hide();
        }
        if ($("#altemail").val() == ""){
            $("#aemail").show();
            tudoCerto = false;
        }else{
            $("#aemail").hide();
        }
    }
    else if(tela == 6){
        if ($("#novsenha").val() == ""){
            $("#nsenha").show();
            tudoCerto = false;
        }else{
            $("#nsenha").hide();
        }
        if ($("#repsenha").val() == ""){
            $("#rsenha").show();
            tudoCerto = false;
        }else{
            $("#rsenha").hide();
        }
    }
    else if(tela == 7){
        if ($("#numconta").val() == ""){
            $("#nconta").show();
            tudoCerto = false;
        }else{
            $("#nconta").hide();
        }
        if ($("#numagencia").val() == ""){
            $("#nagencia").show();
            tudoCerto = false;
        }else{
            $("#nagencia").hide();
        }
        if ($("#valor").val() == ""){
            $("#val").show();
            tudoCerto = false;
        }else{
            $("#val").hide();
        }
    }
    else if(tela == 8){
        if ($("#nomebanco").val() == ""){
            $("#nbanco").show();
            tudoCerto = false;
        }else{
            $("#nbanco").hide();
        }
    }
    else if(tela == 9){
        if ($("#valormov").val() == ""){
            $("#valmov").show();
            tudoCerto = false;
        }else{
            $("#valmov").hide();
        }
    }
    else if(tela == 10){
        if ($("#cadnome").val() == ""){
            $("#cnome").show();
            tudoCerto = false;
        }else{
            $("#cnome").hide();
        }
        if ($("#cademail").val() == ""){
            $("#cemail").show();
            tudoCerto = false;
        }else{
            $("#cemail").hide();
        }
        if ($("#cadsenha").val() == ""){
            $("#csenha").show();
            tudoCerto = false;
        }else{
            $("#csenha").hide();
        }
        if ($("#cadrsenha").val() == ""){
            $("#crsenha").show();
            tudoCerto = false;
        }else{
            $("#crsenha").hide();
        }
    }
    
    
    
        return tudoCerto;
}




