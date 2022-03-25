const add = document.getElementById("add");
const childrenContent = document.getElementById("content-children");
const formPersonalData = document.getElementById("formPersonalData");

function turnUpperCase(event) {
    console.log(event.target);

    if (event.target.value === "" || !event.target.getAttribute("id") === "cpf") {
        event.target.setAttribute("style", "text-transform: uppercase");
    } else if (!event.target.getAttribute("id") === "cpf") {
        event.target.setAttribute("style", "text-transform: capitalize");
    }

    //	event.target.setAttribute("style", "text-transform: lowercase");
}
formPersonalData.addEventListener("click", turnUpperCase);

function addNewInputChildren(e) {
    e.preventDefault();

    let count = parseInt(childrenContent.getAttribute("count")) + 1;
    const space = document.createElement("br");

    // label name

    const newChildrenLabel = document.createElement("label");
    newChildrenLabel.setAttribute("for", "nome_filho" + count);
    newChildrenLabel.innerHTML = "Nome do Filho";

    // input name

    const newChildren = document.createElement("input");
    newChildren.setAttribute("type", "text");
    newChildren.setAttribute("class", "form-control");
    newChildren.setAttribute("id", "nome_filho" + count);
    newChildren.setAttribute("name", "nome_filho[]" + count);

    // label date

    const newChildrenDateLabel = document.createElement("label");
    newChildrenDateLabel.setAttribute("for", "nasc_filho" + count + "BornDate");
    newChildrenDateLabel.innerHTML = "Data de Nasc";

    // input born date

    const newChildrenBornDate = document.createElement("input");
    newChildrenBornDate.setAttribute("class", "form-control");
    newChildrenBornDate.setAttribute("type", "date");
    newChildrenBornDate.setAttribute("id", "nasc_filho" + count + "BornDate");
    newChildrenBornDate.setAttribute("name", "nasc_filho[]" + count);

    // label escolaridade

    const newChildrenEscolaLabel = document.createElement("label");
    newChildrenEscolaLabel.setAttribute("for", "escolaridade" + count);
    newChildrenEscolaLabel.innerHTML = "Escolaridade";

    // input escolaridade

    const newChildrenEscola = document.createElement("select");
    newChildrenEscola.setAttribute("select", "name");
    newChildrenEscola.setAttribute("class", "form-control");
    newChildrenEscola.setAttribute("id", "escolaridade" + count);
    newChildrenEscola.setAttribute("name", "escolaridade[]" + count);

    // label dependente

    const newChildrenDependenteLabel = document.createElement("label");
    newChildrenDependenteLabel.setAttribute("for", "dependente" + count);
    newChildrenDependenteLabel.innerHTML = "Dependente";

    // input dependente

    const newChildrenDependente = document.createElement("select");
    newChildrenDependente.setAttribute("select", "name");
    newChildrenDependente.setAttribute("class", "form-control");
    newChildrenDependente.setAttribute("id", "dependente" + count);
    newChildrenDependente.setAttribute("name", "dependente[]" + count);

    // label imposto de renda

    const newChildrenIrLabel = document.createElement("label");
    newChildrenIrLabel.setAttribute("for", "ir" + count);
    newChildrenIrLabel.innerHTML = "Para Fins I.R.";

    // input imposto de renda

    const newChildrenIr = document.createElement("select");
    newChildrenIr.setAttribute("select", "name");
    newChildrenIr.setAttribute("class", "form-control");
    newChildrenIr.setAttribute("id", "ir" + count);
    newChildrenIr.setAttribute("name", "ir[]" + count);

    // adds

    childrenContent.appendChild(space);
    childrenContent.appendChild(space);
    childrenContent.appendChild(space);
    childrenContent.appendChild(newChildrenLabel);
    childrenContent.appendChild(space);
    childrenContent.appendChild(newChildren);
    childrenContent.appendChild(newChildrenDateLabel);
    childrenContent.appendChild(space);
    childrenContent.appendChild(newChildrenBornDate);
    childrenContent.appendChild(newChildrenEscolaLabel);
    childrenContent.appendChild(space);
    childrenContent.appendChild(newChildrenEscola);
    childrenContent.appendChild(newChildrenDependenteLabel);
    childrenContent.appendChild(newChildrenDependente);
    childrenContent.appendChild(newChildrenIrLabel);
    childrenContent.appendChild(newChildrenIr);
    childrenContent.setAttribute("count", count);
}

add.addEventListener("click", addNewInputChildren);