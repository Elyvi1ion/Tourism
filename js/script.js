let popup_bg=document.getElementById('popup-bg');
let form =document.getElementsByTagName('form');



function togglePopup() {
	popup_bg.classList.toggle('hide');
}
function rollPopup(){
	form[0].classList.toggle('roll');
	form[1].classList.toggle('reverse-roll');
}
