const add = document.getElementById("add");
const childrenContent = document.getElementById("add-filho");
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

    //    label date

    const newChildrenDateLabel = document.createElement("label");
    newChildrenDateLabel.setAttribute("for", "nasc_filho" + count + "BornDate");
    newChildrenDateLabel.innerHTML = "Data de Nasc";

    //    input born date

    const newChildrenBornDate = document.createElement("input");
    newChildrenBornDate.setAttribute("class", "form-control");
    newChildrenBornDate.setAttribute("type", "date");
    newChildrenBornDate.setAttribute("id", "nasc_filho" + count + "BornDate");
    newChildrenBornDate.setAttribute("name", "nasc_filho[]" + count);

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
    childrenContent.appendChild(space);
    childrenContent.setAttribute("count", count);
}

add.addEventListener("click", addNewInputChildren);