function cadastroSucesso() {
    //if (){
        alert("Cadastro realizado com sucesso!");
    //}
    //else {
        //alert("Ocorreu um erro, por favor tente novamente")
    //}
}

function validarVazio(){
    if (document.getElementsByName("nome")[0].value == ""){
        alert("Preencha o campo com Nome Completo");
        return false;
    }
    else if (document.getElementsByName("data_nascimento")[0].value == ""){
        alert("Preencha o campo Data Nascimento");
        return false;
    }
    else if (document.getElementsByName("cpf")[0].value == ""){
        alert("Preencha o campo CPF");
        return false;
    }
    else if (document.getElementsByName("email")[0].value == ""){
        alert("Preencha o campo Email");
        return false;
    }
    else if (document.getElementsByName("celular")[0].value == ""){
        alert("Preencha o campo Celular");
        return false;
    }
    else if (document.getElementsByName("renda")[0].value == ""){
        alert("Preencha o campo Renda");
        return false;
    }
    else if (document.getElementsByName("renda_garantidor")[0].value == ""){
        alert("Preencha o campo Renda do Garantidor");
        return false;
    }
}
