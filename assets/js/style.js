function troca_imagem(obj){
    let src = obj.src;
    if(obj.id =='#seta_cima'){
        obj.src= '../../content/imagens/seta_baixo.png';
        obj.id = '#seta_baixo';
    }else{
        obj.src= '../../content/imagens/seta_cima.png';
        obj.id = '#seta_cima';
    }

}