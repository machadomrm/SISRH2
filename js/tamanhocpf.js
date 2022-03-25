const cpfElement = document.getElementById("cpf");

function tamanhocpf() {

    if (cpfElement.value.length < 14) {
        cpfElement.style.boxShadow = "0px 0px 1px 2px red";
        alert("CPF TAMANHO INVÁLIDO !!");
        cpfElement.value = "";
  }
}