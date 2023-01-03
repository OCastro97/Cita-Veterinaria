
// TOGGLE SIDEBAR
const menuBarInfo = document.querySelector('#contentInfo nav .fas.fa-bars');
const sidebarInfo = document.getElementById('sidebar');

menuBarInfo.addEventListener('click', function () {
	sidebarInfo.classList.toggle('hide');
})

