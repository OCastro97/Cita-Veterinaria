// const allSideMenu = document.querySelectorAll('sidebar .side-menu li a');

// allSideMenu.forEach(item => {
//     const li = item.parentElement;

//     item.addEventListener('click', function() {
//         allSideMenu.forEach( i=> {
//             i.parentElement.classList.remove
//         })
//         li.classList.add('active');
//     });
// });






if(window.innerWidth < 768){
    sidebar.classList.add('hide');
}