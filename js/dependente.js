function changeSelect() {
    var select = document.getElementById("tipo");

    var depend = document.getElementById("depend");
    var conjuge1 = document.querySelector("#nomeconjuge");
    var valor_conjuge1 = conjuge1.value;

    var depend = document.getElementById("depend"); // formulário preenchido
    var mae1 = document.querySelector("#nomemae"); // dados do formulário no modal
    var valor_mae1 = mae1.value;

    var depend = document.getElementById("depend"); // formulário preenchido
    var pai1 = document.querySelector("#nomepai"); // dados do formulário no modal
    var valor_pai1 = pai1.value;

    var value = select.options[select.selectedIndex].value;

    if (value == "conjuge") {
        depend.value = valor_conjuge1;
    }

    if (value == "mae") {
        depend.value = valor_mae1;
    }
    if (value == "pai") {
        depend.value = valor_pai1;
    }
}