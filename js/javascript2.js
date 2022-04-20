const add = document.getElementById("add");
const childrenContent = document.getElementById("content-children");
const formPersonalData = document.getElementById("formPersonalData");

function addNewInputChildren(e) {
    e.preventDefault();

    let count = childrenContent.children.length;

    const section = document.createElement("section");
    //section.setAttribute("class", "content");

  
    const space = document.createElement("br");
    
    
    // label name

    const newChildrenLabel = document.createElement("label");
    newChildrenLabel.setAttribute("for", "nome_filho" + count);
    newChildrenLabel.innerHTML = ("Nome do Filho");
    


    // input name

    const newChildren = document.createElement("input");
    newChildren.setAttribute("type", "text");
    newChildren.setAttribute("class", "form-control  col-md-4");
    newChildren.setAttribute("id", "nome_filho" + count);
    newChildren.setAttribute("name", `nome_filho[${count}]`);

    // label date

    const newChildrenDateLabel = document.createElement("label");
    newChildrenDateLabel.setAttribute("for", "nasc_filho" + count + "BornDate");
    newChildrenDateLabel.setAttribute("class", "container");
    newChildrenDateLabel.innerHTML = "Data de Nasc";

    // input born date

    const newChildrenBornDate = document.createElement("input");
    newChildrenBornDate.setAttribute("class", "form-control  col-md-3");
    newChildrenBornDate.setAttribute("type", "date");
    newChildrenBornDate.setAttribute("id", "nasc_filho" + count + "BornDate");
    newChildrenBornDate.setAttribute("name", `nome_filho[${count}]`);

    // label escolaridade

    const newChildrenEscolaLabel = document.createElement("label");
    newChildrenEscolaLabel.setAttribute("for", "escolaridade" + count);
    newChildrenEscolaLabel.innerHTML = "Escolaridade";

    // input escolaridade

    const newChildrenEscola = document.createElement("select");
    newChildrenEscola.setAttribute("select", "name");
    newChildrenEscola.setAttribute("class", "form-control col-md-4");
    newChildrenEscola.setAttribute("id", "escolaridade" + count);
    newChildrenEscola.setAttribute("name", `nome_filho[${count}]`);
/*
    [newChildrenLabel, newChildren, newChildrenDateLabel, newChildrenBornDate, newChildrenEscolaLabel, newChildrenEscolaLabel].map((item)=>{
        section.appendChild(item);
        
    })
    */
    section.style.cssText = "display:flex; flex-direction: row;"
    childrenContent.appendChild(section);
    [
    childrenContent.appendChild(space),
    childrenContent.appendChild(newChildrenLabel),
    childrenContent.appendChild(space),
    childrenContent.appendChild(newChildren),
    
    childrenContent.appendChild(newChildrenDateLabel),
    childrenContent.appendChild(space),
    childrenContent.appendChild(newChildrenBornDate),
    
    childrenContent.appendChild(newChildrenEscolaLabel),
    childrenContent.appendChild(space),
    childrenContent.appendChild(newChildrenEscola),
    ].map((item))=>section.appendChild(item);


}

add.addEventListener("click", addNewInputChildren);
