
// TOGGLE SIDEBAR
const menuBarConfig= document.querySelector('#contentConfig nav .fas.fa-bars');
const sidebarConfig = document.getElementById('sidebar');

menuBarConfig.addEventListener('click', function () {
	sidebarConfig.classList.toggle('hide');
})

