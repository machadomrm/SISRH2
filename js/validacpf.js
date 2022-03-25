const cpfElement = document.getElementById("cpf");
const rg = document.getElementById("rg");

function valida() {
    if (valida_cpf(cpfElement.value)) {
        rg.focus();
        //alert("CPF Válido");
        cpfElement.style.boxShadow = "0px 0px 1px 2px #64FF33";
    } else {
        cpfElement.style.boxShadow = "0px 0px 1px 2px red";
        alert("CPF Inválido");
        cpf.value = "";
    }
}

function valida_cpf(cpf) {
    var numeros, digitos, soma, i, resultado, digitos_iguais;
    digitos_iguais = 1;
    if (cpf.length < 11) return false;
    for (i = 0; i < cpf.length - 1; i++)
        if (cpf.charAt(i) != cpf.charAt(i + 1)) {
            digitos_iguais = 0;
            break;
        }
    if (!digitos_iguais) {
        numeros = cpf.substring(0, 9);
        digitos = cpf.substring(9);
        soma = 0;
        for (i = 10; i > 1; i--) soma += numeros.charAt(10 - i) * i;
        resultado = soma % 11 < 2 ? 0 : 11 - (soma % 11);
        if (resultado != digitos.charAt(0)) return false;
        numeros = cpf.substring(0, 10);
        soma = 0;
        for (i = 11; i > 1; i--) soma += numeros.charAt(11 - i) * i;
        resultado = soma % 11 < 2 ? 0 : 11 - (soma % 11);
        if (resultado != digitos.charAt(1)) return false;
        return true;
    } else return false;
}

function formatCpf() {
    const cpfElement = document.querySelector("[name='inputCpf']");
    if (parseInt(event.key) || event.key == 0) {
        if (event.key.match(/^[0-9]*$/)) {
            if (cpfElement.value.length === 3 || cpfElement.value.length === 7) {
                cpfElement.value = cpfElement.value + ".";
            } else if (cpfElement.value.length === 11) {
                cpfElement.value = cpfElement.value + "-";
            }
        }
    } else {
        if (!parseInt(this.event.key) &&
            this.event.key.match(/[A-Za-z]/) &&
            this.event.key.length === 1
        ) {
            alert("Please use numbers! \nPor favor utilize numeros!");
        }
    }
}

//SEPARAÇÃO DE CODIGOS

// const cpfElement = document.getElementById("cpf");

// cpfElement.addEventListener("keydown", verifyCpfValue);

// // validate cpf value
// function isValidCPF(cpf) {
//     if (typeof cpf !== "string") return false;
//     cpf = cpf.replace(/[\s.-]*/gim, "");
//     if (!cpf ||
//         cpf.length != 11 ||
//         cpf == "00000000000" ||
//         cpf == "11111111111" ||
//         cpf == "22222222222" ||
//         cpf == "33333333333" ||
//         cpf == "44444444444" ||
//         cpf == "55555555555" ||
//         cpf == "66666666666" ||
//         cpf == "77777777777" ||
//         cpf == "88888888888" ||
//         cpf == "99999999999"
//     ) {
//         return false;
//     }
//     var soma = 0;
//     var resto;
//     for (var i = 1; i <= 9; i++)
//         soma = soma + parseInt(cpf.substring(i - 1, i)) * (11 - i);
//     resto = (soma * 10) % 11;
//     if (resto == 10 || resto == 11) resto = 0;
//     if (resto != parseInt(cpf.substring(9, 10))) return false;
//     soma = 0;
//     for (var i = 1; i <= 10; i++)
//         soma = soma + parseInt(cpf.substring(i - 1, i)) * (12 - i);
//     resto = (soma * 10) % 11;
//     if (resto == 10 || resto == 11) resto = 0;
//     if (resto != parseInt(cpf.substring(10, 11))) return false;
//     return true;
// }

// //verify and set color to box input
// function verifyCpfValue() {
//     if (cpfElement.value.length === 11) {
//         if (isValidCPF(cpfElement.value)) {
//             cpfElement.style.boxShadow = "0px 0px 1px 2px #64FF33";
//         } else {
//             cpfElement.style.boxShadow = "0px 0px 1px 2px red";
//             alert("CPF INVÁLIDO!!");
//         }
//     } else {
//         cpfElement.style.boxShadow = "0px 0px 1px 2px yellow";
//     }
// }

// cpfElement.addEventListener("keyup", verifyCpfValue);