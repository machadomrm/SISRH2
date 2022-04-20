const add = document.getElementById("addDependente");
const dependentContent = document.getElementById("content-dependent");
// const formPersonalData = document.getElementById("formPersonalData");

function addNewInputDependent(e) {
    e.preventDefault();

    let count = parseInt(dependentContent.getAttribute("count")) + 1;
    const space = document.createElement("br");

    // label relação de dependentes

    const newDependentLabel = document.createElement("label");
    newDependentLabel.setAttribute("for", "tipo" + count);
    newDependentLabel.innerHTML = "Relação de Dependente";

    // input relação de dependentes

    const newDependent = document.createElement("input");
    newDependent.setAttribute("select", "name");
    newDependent.setAttribute("class", "form-control col-md-3");
    newDependent.setAttribute("id", "tipo" + count);
    newDependent.setAttribute("name", "tipo[]" + count);

    // label nome

    const newDependentNameLabel = document.createElement("label");
    newDependentNameLabel.setAttribute("for", "depend_nome" + count + "BornDate");
    newDependentNameLabel.innerHTML = "Nome";

    // input nome

    const newDependentName = document.createElement("input");
    newDependentName.setAttribute("type", "text");
    newDependentName.setAttribute("class", "form-control col-md-5");
    newDependentName.setAttribute("id", "depend_nome" + count);
    newDependentName.setAttribute("name", "depend_nome[]" + count);

    // label date

    const newDependentDateLabel = document.createElement("label");
    newDependentDateLabel.setAttribute(
        "for",
        "dependent_nasc" + count + "BornDate"
    );
    newDependentDateLabel.innerHTML = "Data Nasc";

    // input born date

    const newDependentBornDate = document.createElement("input");
    newDependentBornDate.setAttribute(
        "class",
        "form-control col-md-3 container-fluid"
    );
    newDependentBornDate.setAttribute("type", "date");
    newDependentBornDate.setAttribute(
        "id",
        "dependent_nasc" + count + "BornDate"
    );
    newDependentBornDate.setAttribute("name", "dependent_nasc[]" + count);

    // label estado civil

    const newDependentEstadoCivilLabel = document.createElement("label");
    newDependentEstadoCivilLabel.setAttribute("for", "estado_civil" + count);
    newDependentEstadoCivilLabel.innerHTML = "Estado Civil";

    // input estado civil

    const newDependentEstadoCivil = document.createElement("select");
    newDependentEstadoCivil.setAttribute("select", "name");
    newDependentEstadoCivil.setAttribute("class", "form-control col-md-2");
    newDependentEstadoCivil.setAttribute("id", "estado_civil" + count);
    newDependentEstadoCivil.setAttribute("name", "estado_civil[]" + count);

    // label escolaridade

    const newDependentEscolaLabel = document.createElement("label");
    newDependentEscolaLabel.setAttribute("for", "escolaridade" + count);
    newDependentEscolaLabel.innerHTML = "Escolaridade";

    // input escolaridade

    const newDependentEscola = document.createElement("select");
    newDependentEscola.setAttribute("select", "name");
    newDependentEscola.setAttribute("class", "form-control col-md-4");
    newDependentEscola.setAttribute("id", "escolaridade" + count);
    newDependentEscola.setAttribute("name", "escolaridade[]" + count);

    // label imposto de renda

    const newDependentIrLabel = document.createElement("label");
    newDependentIrLabel.setAttribute("for", "fir" + count);
    newDependentIrLabel.innerHTML = "Para Fins I.R.";

    // input imposto de renda

    const newDependentIr = document.createElement("select");
    newDependentIr.setAttribute("select", "name");
    newDependentIr.setAttribute("class", "form-control col-md-2");
    newDependentIr.setAttribute("id", "fir" + count);
    newDependentIr.setAttribute("name", "fir[]" + count);

    // adds

    dependentContent.appendChild(space);
    dependentContent.appendChild(newDependentLabel);
    dependentContent.appendChild(newDependent);
    dependentContent.appendChild(space);
    dependentContent.appendChild(newDependentDateLabel);
    dependentContent.appendChild(newDependentBornDate);
    dependentContent.appendChild(space);
    dependentContent.appendChild(newDependentEstadoCivilLabel);
    dependentContent.appendChild(newDependentEstadoCivil);
    dependentContent.appendChild(space);
    dependentContent.appendChild(newDependentEscolaLabel);
    dependentContent.appendChild(newDependentEscola);
    dependentContent.appendChild(newDependentIrLabel);
    dependentContent.appendChild(newDependentIr);
    dependentContent.setAttribute("count", count);
}

add.addEventListener("click", addNewInputDependent);