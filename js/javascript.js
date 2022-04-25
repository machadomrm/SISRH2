const add = document.getElementById("add");
const childrenContent = document.getElementById("content-children");
const formPersonalData = document.getElementById("formPersonalData");

function addNewInputChildren(e) {
    e.preventDefault();

    let count = childrenContent.children.length;

    const section = document.createElement("section");

    // nome filho
    const DivNomeFilho = document.createElement("div");
    DivNomeFilho.className = "col-md-5";
    const LabelNomeFilho = document.createElement("label");
    LabelNomeFilho.setAttribute("for", "nome_filho" + count);
    LabelNomeFilho.innerHTML = "Nome do Filho";
    const InputNomeFilho = document.createElement("input");
    InputNomeFilho.setAttribute("type", "text");
    InputNomeFilho.setAttribute("class", "form-control");
    InputNomeFilho.setAttribute("id", "nome_filho" + count);
    InputNomeFilho.setAttribute("name", `nome_filho[${count}]`);
    DivNomeFilho.appendChild(LabelNomeFilho);
    DivNomeFilho.appendChild(InputNomeFilho);

    // data nascimento
    const DivDataNasc = document.createElement("div");
    DivDataNasc.className = "col-md-3";
    const LabelDataNasc = document.createElement("label");
    LabelDataNasc.setAttribute("for", "nasc_filho" + count + "BornDate");
    LabelDataNasc.innerHTML = "Data Nasc";
    const InputDataNasc = document.createElement("input");
    InputDataNasc.setAttribute("class", "form-control");
    InputDataNasc.setAttribute("type", "date");
    InputDataNasc.setAttribute("id", "nasc_filho" + count + "BornDate");
    InputDataNasc.setAttribute("name", `nome_filho[${count}]`);
    DivDataNasc.appendChild(LabelDataNasc);
    DivDataNasc.appendChild(InputDataNasc);

    // escolaridade
    const DivEscolaridade = document.createElement("div");
    DivEscolaridade.className = "col-md-4";
    const LabelEscolaridade = document.createElement("label");
    LabelEscolaridade.setAttribute("for", "escolaridade" + count);
    LabelEscolaridade.innerHTML = "Escolaridade";
    const SelectEscolaridade = document.createElement("select");
    SelectEscolaridade.setAttribute("select", "name");
    SelectEscolaridade.setAttribute("class", "form-control");
    SelectEscolaridade.setAttribute("id", "escolaridade" + count);
    SelectEscolaridade.setAttribute("name", `escolaridade[${count}]`);
    DivEscolaridade.appendChild(LabelEscolaridade);
    DivEscolaridade.appendChild(SelectEscolaridade);

    // dependente
    const DivDependente = document.createElement("div");
    DivDependente.className = "col-md-4";
    // DivDependente.insertAdjacentHTML("beforeend", "<br></br>");
    const LabelDependente = document.createElement("label");
    LabelDependente.setAttribute("for", "dependente" + count);
    LabelDependente.innerHTML = "Dependente";
    const SelectDependente = document.createElement("select");
    SelectDependente.setAttribute("select", "text");
    SelectDependente.setAttribute("class", "form-control");
    SelectDependente.setAttribute("id", "dependente" + count);
    SelectDependente.setAttribute("name", `dependente[${count}]`);
    DivDependente.appendChild(LabelDependente);
    DivDependente.appendChild(SelectDependente);

    // I.R.
    const DivFir = document.createElement("div");
    DivFir.className = "col-md-4";
    // DivFir.insertAdjacentHTML("beforeend", "<br></br>");
    const LabelFir = document.createElement("label");
    LabelFir.setAttribute("for", "fir" + count);
    LabelFir.innerHTML = "Fins para I.R.:";
    const SelectFir = document.createElement("select");
    SelectFir.setAttribute("select", "name");
    SelectFir.setAttribute("class", "form-control");
    SelectFir.setAttribute("id", "fir" + count);
    SelectFir.setAttribute("name", `fir[${count}]`);
    DivFir.appendChild(LabelFir);
    DivFir.appendChild(SelectFir);

    [DivNomeFilho, DivDataNasc, DivEscolaridade, DivDependente, DivFir].map(
        (item) => {
            section.appendChild(item);
        }
    );
    section.style.cssText =
        "display:flex; flex-direction: row; flex-wrap: wrap; width:100%;";
    childrenContent.appendChild(section);
}

function apagaForm() {
    document.getElementById("InputNomeFilho").reset();
    document.getElementById("SelectEscolaridade").reset();
    document.getElementById("SelectDependente").reset();
    document.getElementById("SelectFir").reset();
}

add.addEventListener("click", addNewInputChildren);