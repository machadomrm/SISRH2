function changeSelect() {
    var select = document.getElementById("tipo");

    var mae2 = document.getElementById("mae2");
    var conjugue1 = document.querySelector("#conjugue");
    var valor_conjugue1 = conjugue1.value;

    var mae2 = document.getElementById("mae2");
    var mae1 = document.querySelector("#mae");
    var valor_mae1 = mae1.value;

    var value = select.options[select.selectedIndex].value;

    if (value == "conjugue") {
        mae2.value = valor_conjugue1;
    }

    if (value == "mae") {
        mae2.value = valor_mae1;
    }
}