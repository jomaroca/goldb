// Menú de navegación.

const btnMenu = document.querySelector('.btnMenu');
const menu = document.querySelector('.menu-navegacion');
btnMenu.addEventListener('click', function(){
    menu.classList.toggle("spread");
    window.addEventListener('click', e =>{
        if(menu.classList.contains('spread') 
            && e.target != menu && e.target != btnMenu){
            console.log('cerrar')
            menu.classList.toggle("spread")
        }
    })
});