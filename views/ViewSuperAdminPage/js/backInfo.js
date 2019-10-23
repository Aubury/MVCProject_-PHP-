const objInf = {
    allCompl : document.querySelector("#allComplaints"),
    allAnsw  : document.querySelector("#answeredComplaints"),
    newCompl : document.querySelector("#newComplaints"),
    container: document.querySelector(".tableReports")


}

const getNumCompl = function getTotalNumberComplaints(){

    fetch(`/inf/compl`).then(d=> d.text())
                            .then(d=> objInf.allCompl.innerHTML = d);
}

const getNumAnsw = function getTotalNumberAnswers(){

    fetch(`/inf/answ`).then(d => d.text())
                           .then(d => objInf.allAnsw.innerHTML = d);
}

const getNumNewCompl = function getTotalNumberNewComplains() {

    fetch(`/inf/newCompl`).then( d => d.text())
                               .then( d => objInf.newCompl.innerHTML = d);

}
const fillUpcontainer = function fillInComplainerContainer(){

   fetch(`/inf/compAnsw`).then( d => d.json())
                               .then( d => templateContainer(d));
}

const templateContainer = function createTemplateContainer(arr){

    let len = arr['complains'].length,
        info = objInf.container; //.tableReports

    //Удаляю всех детей!!!
    while(info.hasChildNodes()){
          info.removeChild(info.firstChild);
    }


    for(let k = 0; k < len; k++){
        const mainDiv = createAndClass('div', 'card', 'border-warning', 'mb-3'), //основной контейнер
        containerHeaderComp = createAndClass('div', 'card-header'),
        secondDivCompl = createAndClass('div', 'row'),
        containerCompl = createAndClass('div', 'card-body');//text

      createComplHeaders(secondDivCompl,arr['complains'][k]);

        containerCompl.innerHTML = arr['complains'][k].pop();
        containerHeaderComp.appendChild(secondDivCompl);
        mainDiv.appendChild(containerHeaderComp);
         mainDiv.appendChild(containerCompl);

        let containerHeaderAnsw = document.createElement('div'),
        secondDivAnsw = document.createElement('div'),
        containerAnsw = document.createElement('div');//text

        containerHeaderAnsw.classList.add('card-header');
        secondDivAnsw.classList.add('row');
        containerAnsw.classList.add('card-body'); //text

        createComplHeaders(secondDivAnsw, arr['answers'][k]);


        containerAnsw.innerHTML = arr['answers'][k].pop();

        containerHeaderAnsw.appendChild(secondDivAnsw);
        mainDiv.appendChild(containerHeaderAnsw);
        mainDiv.appendChild(containerAnsw);
       

        info.appendChild(mainDiv);
    }
}

function createAndClass(name = 'div', ...classes){
    const el = document.createElement(name);
    el.classList.add(...classes);
    return el;
}

function createComplHeaders(parent, arr) {
    var newArr = arr.slice(0, -1);
    newArr.forEach( el => {
            const  div = createAndClass('div', 'col');
            div.innerHTML = el;
            parent.appendChild(div);

    });
}

getNumCompl();
setInterval(getNumCompl, 50000);

getNumAnsw();
setInterval(getNumAnsw, 50000);

fillUpcontainer();
setInterval(fillUpcontainer, 50000);

getNumNewCompl();
setInterval(getNumNewCompl, 50000);


