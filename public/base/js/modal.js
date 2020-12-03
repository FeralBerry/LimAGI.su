var num = 15;
var modalBtnLogin = document.querySelector('.open_login');
var closeBtnLogin = document.querySelector('.close_modal_login');
var modalContainerLogin = document.querySelector('.modals_login');
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
modalContainerLogin.appendChild(holdModals);

modalBtnLogin.addEventListener('click',function(){
    modalContainerLogin.style.display = 'block';
    window.setTimeout(function(){
        modalContainerLogin.classList.add('active');
    },0.1);
});
closeBtnLogin.addEventListener('click',function(){
    modalContainerLogin.classList.remove('active');

    window.setTimeout(function(){
        modalContainerLogin.style.display = 'none';
    },3000);
});
///////////////////////////
var modalBtnReg = document.querySelector('.open_reg');
var closeBtnReg = document.querySelector('.close_modal_reg');
var modalContainerReg = document.querySelector('.modals_reg');
for (var i = 0; i < num; i++) {
    var div = document.createElement('div');
    div.classList.add('modal-drop');
    div.style.top = Math.floor((Math.random() * 100)) + 'vh';
    div.style.left = Math.floor((Math.random() * 100)) + 'vw';
    div.style.transitionDelay = Math.random() + 's';
    holdModals.appendChild(div);
}
console.log();
modalContainerReg.appendChild(holdModals);
modalBtnReg.addEventListener('click',function(){
    modalContainerReg.style.display = 'block';
    window.setTimeout(function(){
        modalContainerReg.classList.add('active');
    },0.1);
});
closeBtnReg.addEventListener('click',function(){
    modalContainerReg.classList.remove('active');

    window.setTimeout(function(){
        modalContainerReg.style.display = 'none';
    },3000);
});
///////////////////////////
var modalBtnUser = document.querySelector('.open_user');
var closeBtnUser = document.querySelector('.close_modal_login');
var modalContainerUser = document.querySelector('.modals_login');
for (var i = 0; i < num; i++) {
    var div = document.createElement('div');
    div.classList.add('modal-drop');
    div.style.top = Math.floor((Math.random() * 100)) + 'vh';
    div.style.left = Math.floor((Math.random() * 100)) + 'vw';
    div.style.transitionDelay = Math.random() + 's';
    holdModals.appendChild(div);
}
console.log();
modalContainerUser.appendChild(holdModals);
modalBtnUser.addEventListener('click',function(){
    modalContainerUser.style.display = 'block';
    window.setTimeout(function(){
        modalContainerUser.classList.add('active');
    },0.1);
});
closeBtnUser.addEventListener('click',function(){
    modalContainerUser.classList.remove('active');

    window.setTimeout(function(){
        modalContainerUser.style.display = 'none';
    },3000);
});
///////////////////////////
