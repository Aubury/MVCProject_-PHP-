let rex = {
    form   : document.forms['formPhoto'],
    delForm:document.forms['formDelPhoto'],
    arrInp : document.forms['formPhoto'].querySelectorAll('.inpText'),
    table  : document.querySelector('.tablePhoto')
};

//---------------------------------------------------------------------------------------------
const photoTable = function createPhotoTable(arr) {

    let answer = '';

    arr.forEach(el => {
        answer += `<div class="card align-self-end" style="width: 18rem;">
           <h5 class="h5">${el.name}</h5>
          <div class="iframe"><img class="card-img-top" src="${el[4]}${el[1]}" alt="Card image cap"></div> 
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Id - <span>${el.id}</span></li>
            <li class="list-group-item">Размер - <span>${el.size}</span></li>
            <li class="list-group-item">Ширина_Высота - <span>${el.width_height}</span></li>
          </ul>
        </div>`;

    });


    rex.table.innerHTML = answer;

}
//----------------------------------------------------------------------------------------
const getPhotos = function getPhotos(){

    fetch('/inf/photos').then( inf => inf.json())
        // .then((arr => console.log(arr)));
        .then( arr => photoTable(arr));
}
//----------------------------------------------------------------------------------------

//Обработчик отправки.
rex.form.addEventListener('submit', function (ev) {

    ev.preventDefault();

    const url = '/reg/addPhoto',
        fD  = new FormData(),
        fileField = document.querySelector('input[type="file"]');

    fD.append('file', fileField.files[0]);

    fetch(url,{
        method: "POST",
        body: fD
    }).then((response)=> {  return response.text();})
        .then((text)=>{rex.form.nextElementSibling.innerHTML = text;
            for(let i=0; i<rex.arrInp.length; i++){

                rex.arrInp[i].value = '';
            }
            getPhotos();
        });
})
//--------------------------------------------------------------------------------------------
rex.delForm.addEventListener('submit', function (ev) {

    ev.preventDefault();

    const url = '/reg/delPhoto',
        fD  = new FormData(),
        id = rex.delForm['id'].value;

    fD.append('id', id);

    fetch(url,{
        method: "POST",
        body: fD
    }).then((response)=> {  return response.text();})
        .then((text)=>{rex.delForm.nextElementSibling.innerHTML = text;
            for(let i=0; i<rex.arrInp.length; i++){

                rex.arrInp[i].value = '';
            }
            getPhotos();
        });

})
getPhotos();
