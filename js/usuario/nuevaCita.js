
// TOGGLE SIDEBAR
const menuBarNew = document.querySelector('#contentNew nav .fas.fa-bars');
const sidebarNew = document.getElementById('sidebar');

menuBarNew.addEventListener('click', function () {
	sidebarNew.classList.toggle('hide');
})

