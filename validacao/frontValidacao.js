function validar(){
    var nome = document.getElementById('nome').value;
    var endereco = document.getElementById('endereco').value;
    var div =document.getElementById('divMsg');

    if(nome == ""){
        div.innerHTML = "<br>Campo nome vazio!";
        return false;
    }
    if(endereco == ""){
        div.innerHTML = "<br>Campo endereço vazio!";
        return false;
    }
    return true;

    console.log(nome, endereco);
    return true;
}