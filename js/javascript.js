const add = document.getElementById("add");
const childrenContent = document.getElementById("content-children");
const formPersonalData = document.getElementById("formPersonalData");

function addNewInputChildren(e) {
    e.preventDefault();

    let count = childrenContent.children.length;
    // let comboEscolaridade = document.getElementById("CboEscolaridade");

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

    // for (i = 0; i < comboEscolaridade.length; i = i + 1) {
    //     console.log(comboEscolaridade.options[i]);
    // }

    // <
    // input type = "button"
    // id = "btnCarregar"
    // value = "Carregar combobox" / > ;

    // document.getElementById("btnCarregar").onclick = function() {
    //     var comboEscolaridade = document.getElementById("CboEscolaridade");

    //     var opt0 = document.createElement("option");
    //     opt0.value = "";
    //     opt0.text = "Selecione";
    //     comboEscolaridade.add(opt0, comboEscolaridade.options[0]);

    //     var opt1 = document.createElement("option");
    //     opt1.value = "2GC";
    //     opt1.text = "Segundo Grau Completo";
    //     comboEscolaridade.add(opt1, comboEscolaridade.options[1]);

    //     var opt2 = document.createElement("option");
    //     opt2.value = "2GI";
    //     opt2.text = "Segundo Grau Incompleto";
    //     comboEscolaridade.add(opt2, comboEscolaridade.options[2]);

    //     var opt3 = document.createElement("option");
    //     opt3.value = "CTC";
    //     opt3.text = "Curso Técnico Completo";
    //     comboEscolaridade.add(opt3, comboEscolaridade.options[3]);

    //     var opt4 = document.createElement("option");
    //     opt4.value = "CTI";
    //     opt4.text = "Curso Técnico Incompleto";
    //     comboEscolaridade.add(opt4, comboEscolaridade.options[4]);

    //     var opt5 = document.createElement("option");
    //     opt5.value = "NSC";
    //     opt5.text = "Nível Superior Completo";
    //     comboEscolaridade.add(opt5, comboEscolaridade.options[5]);

    //     var opt6 = document.createElement("option");
    //     opt6.value = "NSI";
    //     opt6.text = "Nível Superior Incompleto";
    //     comboEscolaridade.add(opt6, comboEscolaridade.options[6]);

    //     var opt7 = document.createElement("option");
    //     opt7.value = "PGC";
    //     opt7.text = "Pós Graduação Completo";
    //     comboEscolaridade.add(opt7, comboEscolaridade.options[7]);

    //     var opt8 = document.createElement("option");
    //     opt8.value = "PGI";
    //     opt8.text = "Pós Graduação Incompleto";
    //     comboEscolaridade.add(opt8, comboEscolaridade.options[8]);
    // };
    ///////////////////////////////////////////////////
    // function atualizouSelect() {
    //     let select = document.querySelector("#cboDependente");
    //     let optionValue = select.option[select.selectedIndex];

    //     let value = optionValue.value;
    //     let text = optionValue.text;

    //     console.log(value, text);
    // }

    // atualizouSelect();

    // dependente
    const DivDependente = document.createElement("div");
    DivDependente.className = "col-md-4";
    // DivDependente.insertAdjacentHTML("beforeend", "<br></br>");
    const LabelDependente = document.createElement("label");
    LabelDependente.setAttribute("for", "dependente" + count);
    LabelDependente.innerHTML = "Dependente";
    const SelectDependente = document.createElement("select");
    SelectDependente.setAttribute("select", "name");
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

add.addEventListener("click", addNewInputChildren);