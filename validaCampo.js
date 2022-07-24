function validaCampo(){
    if(document.cadastro.nome.value==""){
      alert("O campo nome é obrigatório!");
      return false;
    }
    else if(document.cadastro.email.value==""){
      alert("O campo email é obrigatório!");
      return false;
    }
    else if(document.cadastro.nascimento.value==""){
      alert("O campo nascimento é obrigatório!");
      return false;
    }
    else if(document.cadastro.telefone.value==""){
      alert("O campo telefone é obrigatório!");
      return false;
    }
    else{
      return true;
    }
}