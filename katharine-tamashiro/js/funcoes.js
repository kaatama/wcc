function manipularHTML(id, color, top, left, width, height){
    //var
    var divManipulada = document.getElementById(id);
    //window.alert("Teste de função");
    //document.getElementById(id).style.display = "none";
    //document.getElementById(id).style.backgroundColor = cor;
    //document.getElementById(id).style.top = top;
    //document.getElementById(id).style.left = left;
    divManipulada.style.backgroundColor = color;
    divManipulada.style.top = top;
    divManipulada.style.left = left;

    if (document.getElementById("largura").value != "" && document.getElementById("altura").value != ""){
        divManipulada.style.width = document.getElementById("largura").value;
        divManipulada.style.height = document.getElementById("altura").value;
    }
}

function retornarDados(parametro1, parametro2){
    //var strRetorno = "dados retornados"; //debug
    var strRetorno = "";

    strRetorno = parametro1 + parametro2;
    return strRetorno;
}

function mensagemErro(){
    campoDados = document.getElementById("dados");
    campoMensagem = document.getElementById("divMensagemErro");

    if (campoDados.value != ""){
        campoMensagem.style.display = "none";
    }
    else {
        campoMensagem.style.display = "block";
    }
}