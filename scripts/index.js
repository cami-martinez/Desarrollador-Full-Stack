// variables: espacio reservado para almacenar disntintos valores
// MENU DE NAVEGACION
var menuButton = document.getElementById('menu-btn');
var menuList = document.getElementById('menu-list');

// Funciones: bloques de codigos que se van a utilizar
// FUNCION ALTERNADORA
function toggle(target, className){
    
    if (target.classList.contains(className)){
        target.classList.remove(className)
    }
    else {
        target.classList.add(className)
    }
}

// Eventos: acciones realizadas por el usuario
// BOTON DE NAVEGACION
menuButton.onclick = function () {
    toggle(menuList, 'active');
}
