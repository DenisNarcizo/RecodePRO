function exibir_categoria(categoria) {
    let elementos = document.getElementsByClassName('box_produto');
    console.log(elementos);
    for (var i = 0; i < elementos.length; i++) {
        console.log(elementos[i].id);
        if (categoria == elementos[i].id)
            elementos[i].style = "display:inline-block";
        else elementos[i].style = "display:none";

    }
}

let exibir_todos = () => {
    let elementos = document.getElementsByClassName('box_produto');
    for (var i = 0; i < elementos.length; i++) {
        elementos[i].style = "display:inline-block";
    }
};

function aumenta(obj) {
    obj.height = obj.height * 1.5;
    obj.width = obj.width * 1.5;
}

function diminui(obj) {
    obj.height = obj.height / 1.5;
    obj.width = obj.width / 1.5;
}

