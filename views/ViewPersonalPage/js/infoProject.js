let dom = {
    tabsContainer : document.querySelector('.list__projects'),
    projectContainer : document.querySelector('.right__main__content'),
    lists      : [],
    tabs       : [],
    userInvest : [],
    hide       : 'none'
}
//----------------------------------------------------------------------------
const ready = function fillMass() {

    dom.tabs.push(document.querySelectorAll('.tab'));
    dom.lists.push(document.querySelectorAll('.list'));

    dom.tabs[0].forEach(tab => tab.addEventListener('click', e => {
        deleteActione();
        dom.lists[0].forEach(list => {
            //Скрываю все вкладки
            list.classList.add(dom.hide);
            tab.classList.add('active');

            if(list.classList.contains(e.target.dataset.for)){
                list.classList.remove(dom.hide);
            }
        });
    }));
}
//----------------------------------------------------------------------------
const getProgects = function getMassProjects(){

    fetch('/inf/project').then( data => data.json())
        .then(arr => creatProject(arr[1]));
}
//--------------------------------------------------------------------------
const getTotalPayments = function getUserPayments() {

    const url = '/inf/userInvest';

    fetch(url).then(mass => mass.json())
        .then(mass => dom.userInvest.push(mass))
        .then(getProgects());
        // .then(arr => console.log(arr));

}
//---------------------------------------------------------------------------
const deleteActione = function classAction() {
    dom.tabs[0].forEach( el => el.classList.remove('active'));
}
//--------------------------------------------------------------------------
const creatProject = function creatProject(arr) {
    let i = 1;
    arr.forEach( el => { let p = creatTab(el.name, i),
        div = projectCard(el, i);
        dom.tabsContainer.appendChild(p);
        dom.projectContainer.appendChild(div);
        i++;
    });
    ready();
}
//-----------------------------------------------------------------------------
function createAndClass(name = 'div', ...classes){
    const el = document.createElement(name);
    el.classList.add(...classes);
    return el;
}
//----------------------------------------------------------------------------
const creatTab = function createTabs(name, i) {

    const p = document.createElement('p');
    p.classList.add('tab');
    p.setAttribute('data-for', `project__${i}`);
    p.innerHTML = `Проект \"${name}\"`;
    return p;
}
//-----------------------------------------------------------------------------
const projectCard = function createProjectCart(arr, i){

    let share_investment = 0,
        invest_amount = 0;

    dom.userInvest[0].forEach(
        el => {if(el.project == arr.name){
                       share_investment = el.share_investment;
                       invest_amount = el.invest_amount;
         }});

    let answ = '',
        projectCart  = document.createElement('div');
    projectCart.classList.add(`project__${i}`, 'none', 'list');

    answ += `<div class="card-header row justify-content-around">
                  <div class="p-2 flex-grow-1">Бюджет: <span class="italic">${arr.budget}</span></div>
                  <div class="p-2 flex-grow-1">Ваша доля вклада: <span class="italic">${share_investment}</span></div>
                  <div class="p-2 flex-grow-1">Вы вложили: <span class="italic">${invest_amount}</span></div>
              </div>
              <div class="container p-2">
               <div class="heightMainCsrd">
                     <h2>Проект \"${arr.name}\"</h2>
                     <p class="card-text p-2">
                     <img src="${arr.photo_1}" alt="" class="mainPhoto">
                     ${arr.text_1}</p>  
                     <p class="card-text p-2">
                      ${arr.text_2}</p>
                </div>   
              </div>    
                <div class="cardFooter"> 
                    <div class="aside" ">
                       <p>Номера счетов</p>
                       <p>**************</p>
                       <p>***************</p>
                    </div> 
                    <div class="padImg">
                        <div class="sizeImg"><img class="padImg " src="${arr.photo_2}" alt=""></div> 
                        <div class="sizeImg"> <img class="padImg" src="${arr.photo_3}" alt=""></div>
                        <div class="sizeImg"><img class="padImg" src="${arr.photo_4}" alt=""></div>
                        <div class="sizeImg"><img class="padImg" src="${arr.photo_5}" alt=""></div>
                     </div>
                 </div>
              </div>`;

    projectCart.innerHTML = answ;

    return projectCart;
}
//-----------------------------------------------------------------------------
// getProgects();
getTotalPayments();