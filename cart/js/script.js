const tab1 = document.querySelector('.tab1');
const tab2 = document.querySelector('.tab2');
const buy = document.querySelector('.buy-from-other');
const sell = document.querySelector('.sell-to-others');
const expnd = document.querySelector('.expand-btn');
const more = document.querySelectorAll('.more-item');
const more2 = document.querySelectorAll('.more-item2');
const more3 = document.querySelectorAll('.more-item3');
const more4 = document.querySelectorAll('.more-item4');
const modal = document.querySelector('.modal');
const bckdrp = document.querySelector('.backdrop');
const edit = document.querySelectorAll('.edit');
const cncl = document.querySelector('.cancel-modal');

function tabControl(){
    buy.style.borderTop = '2px solid #5e5e5e';
    buy.style.borderLeft = '2px solid #5e5e5e';
    sell.style.borderBottom = '2px solid #5e5e5e';
    sell.style.borderTop = 'white';
    sell.style.borderRight = 'white';
    buy.style.background = 'white';
    buy.style.borderBottom = 'white';
    sell.style.background = '#ddd';
    sell.style.color = '#5e5e5e';
    tab1.style.display = 'block';
    tab2.style.display = 'none';
}
function tab2Control(){
    sell.style.borderTop = '2px solid #5e5e5e';
    sell.style.borderRight ='2px solid #5e5e5e';
    sell.style.borderBottom ='white';
    sell.style.background ='white';
    sell.style.color = '#5e5e5e';
    buy.style.borderBottom ='2px solid #5e5e5e';
    buy.style.borderTop ='white';
    buy.style.background = '#ddd';
    buy.style.color = '#5e5e5e';
    buy.style.borderLeft = 'white';
    tab1.style.display = 'none';
    tab2.style.display = 'block';
}
function expndItem(){
    more.forEach((item)=>{
        item.style.display = 'flex';
    })
    
}
function expndItem2(){
    more2.forEach((item)=>{
        item.style.display = 'flex';
    })
}
function expndItem3(){
    more3.forEach((item)=>{
        item.style.display = 'flex';
    })
}
function expndItem4(){
    more4.forEach((item)=>{
        item.style.display = 'flex';
    })
}

function close_modal (){
    modal.style.display = "none";
    bckdrp.style.display = "none";
}

    edit.forEach(element => {
        element.addEventListener('click', ()=>{
            modal.style.display = 'flex';
            bckdrp.style.display = 'block';
        })
    });

cncl.addEventListener('click', close_modal);
bckdrp.addEventListener("click", close_modal);
