var num = 15;
var modalBtnCorp = document.querySelector('.open_corp');
var closeBtnCorp = document.querySelector('.close_modal_corp');
var modalContainerCorp = document.querySelector('.modals_corp');
var holdModals = document.createDocumentFragment();
for (var i = 0; i < num; i++) {
    var div = document.createElement('div');
    div.classList.add('modal-drop');
    div.style.top = Math.floor((Math.random() * 100)) + 'vh';
    div.style.left = Math.floor((Math.random() * 100)) + 'vw';
    div.style.transitionDelay = Math.random() + 's';
    holdModals.appendChild(div);
}
console.log();
modalContainerCorp.appendChild(holdModals);
modalBtnCorp.addEventListener('click',function(){
    modalContainerCorp.style.display = 'block';
    window.setTimeout(function(){
        modalContainerCorp.classList.add('active');
    },0.1);
});
closeBtnCorp.addEventListener('click',function(){
    modalContainerCorp.classList.remove('active');

    window.setTimeout(function(){
        modalContainerCorp.style.display = 'none';
    },3000);
});
///////////////////////////
var modalBtnDesign = document.querySelector('.open_design');
var closeBtnDesign = document.querySelector('.close_modal_design');
var modalContainerDesign = document.querySelector('.modals_design');
for (var i = 0; i < num; i++) {
    var div = document.createElement('div');
    div.classList.add('modal-drop');
    div.style.top = Math.floor((Math.random() * 100)) + 'vh';
    div.style.left = Math.floor((Math.random() * 100)) + 'vw';
    div.style.transitionDelay = Math.random() + 's';
    holdModals.appendChild(div);
}
console.log();
modalContainerDesign.appendChild(holdModals);
modalBtnDesign.addEventListener('click',function(){
    modalContainerDesign.style.display = 'block';
    window.setTimeout(function(){
        modalContainerDesign.classList.add('active');
    },0.1);
});
closeBtnDesign.addEventListener('click',function(){
    modalContainerDesign.classList.remove('active');

    window.setTimeout(function(){
        modalContainerDesign.style.display = 'none';
    },3000);
});
///////////////////////////
var modalBtnCard = document.querySelector('.open_card');
var closeBtnCard = document.querySelector('.close_modal_card');
var modalContainerCard = document.querySelector('.modals_card');
for (var i = 0; i < num; i++) {
    var div = document.createElement('div');
    div.classList.add('modal-drop');
    div.style.top = Math.floor((Math.random() * 100)) + 'vh';
    div.style.left = Math.floor((Math.random() * 100)) + 'vw';
    div.style.transitionDelay = Math.random() + 's';
    holdModals.appendChild(div);
}
console.log();
modalContainerCard.appendChild(holdModals);
modalBtnCard.addEventListener('click',function(){
    modalContainerCard.style.display = 'block';
    window.setTimeout(function(){
        modalContainerCard.classList.add('active');
    },0.1);
});
closeBtnCard.addEventListener('click',function(){
    modalContainerCard.classList.remove('active');

    window.setTimeout(function(){
        modalContainerCard.style.display = 'none';
    },3000);
});
///////////////////////////
var modalBtnLanding = document.querySelector('.open_landing');
var closeBtnLanding = document.querySelector('.close_modal_landing');
var modalContainerLanding = document.querySelector('.modals_landing');
for (var i = 0; i < num; i++) {
    var div = document.createElement('div');
    div.classList.add('modal-drop');
    div.style.top = Math.floor((Math.random() * 100)) + 'vh';
    div.style.left = Math.floor((Math.random() * 100)) + 'vw';
    div.style.transitionDelay = Math.random() + 's';
    holdModals.appendChild(div);
}
console.log();
modalContainerLanding.appendChild(holdModals);
modalBtnLanding.addEventListener('click',function(){
    modalContainerLanding.style.display = 'block';
    window.setTimeout(function(){
        modalContainerLanding.classList.add('active');
    },0.1);
});
closeBtnLanding.addEventListener('click',function(){
    modalContainerLanding.classList.remove('active');

    window.setTimeout(function(){
        modalContainerLanding.style.display = 'none';
    },3000);
});
///////////////////////////
var modalBtnMagazine = document.querySelector('.open_magazine');
var closeBtnMagazine = document.querySelector('.close_modal_magazine');
var modalContainerMagazine = document.querySelector('.modals_magazine');
for (var i = 0; i < num; i++) {
    var div = document.createElement('div');
    div.classList.add('modal-drop');
    div.style.top = Math.floor((Math.random() * 100)) + 'vh';
    div.style.left = Math.floor((Math.random() * 100)) + 'vw';
    div.style.transitionDelay = Math.random() + 's';
    holdModals.appendChild(div);
}
console.log();
modalContainerMagazine.appendChild(holdModals);
modalBtnMagazine.addEventListener('click',function(){
    modalContainerMagazine.style.display = 'block';
    window.setTimeout(function(){
        modalContainerMagazine.classList.add('active');
    },0.1);
});
closeBtnMagazine.addEventListener('click',function(){
    modalContainerMagazine.classList.remove('active');

    window.setTimeout(function(){
        modalContainerMagazine.style.display = 'none';
    },3000);
});
///////////////////////////
var modalBtnSeo = document.querySelector('.open_seo');
var closeBtnSeo = document.querySelector('.close_modal_seo');
var modalContainerSeo = document.querySelector('.modals_seo');
for (var i = 0; i < num; i++) {
    var div = document.createElement('div');
    div.classList.add('modal-drop');
    div.style.top = Math.floor((Math.random() * 100)) + 'vh';
    div.style.left = Math.floor((Math.random() * 100)) + 'vw';
    div.style.transitionDelay = Math.random() + 's';
    holdModals.appendChild(div);
}
console.log();
modalContainerSeo.appendChild(holdModals);
modalBtnSeo.addEventListener('click',function(){
    modalContainerSeo.style.display = 'block';
    window.setTimeout(function(){
        modalContainerSeo.classList.add('active');
    },0.1);
});
closeBtnSeo.addEventListener('click',function(){
    modalContainerSeo.classList.remove('active');

    window.setTimeout(function(){
        modalContainerSeo.style.display = 'none';
    },3000);
});
