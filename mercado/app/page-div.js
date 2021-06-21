function abrir_pag(valor){
    var url = valor;
 
    xmlRequest.open("GET",url,true);    
    xmlRequest.onreadystatechange = mudancaEstado;
    xmlRequest.send(null);
 
        if (xmlRequest.readyState == 1) {
            document.getElementById("conteudo_produtos").innerHTML;
        }
 
    return url;
}
 
function mudancaEstado(){
    if (xmlRequest.readyState == 4){
        document.getElementById("conteudo_produtos").innerHTML = xmlRequest.responseText;
    }
}