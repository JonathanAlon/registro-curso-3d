/*Funciones de elemento click */
document.getElementById("btn__icon").addEventListener("click", open_close_menu);
/* Variables en HTML = "id"*/
var body = document.getElementById("body");
var btn__icon = document.getElementById("btn__icon");
var text__menu = document.getElementById("text__menu");
/*Evento para mostrar y ocultar menu*/
function open_close_menu(){
	body.classList.toggle("body_move");
	text__menu.classList.toggle("text__hidden");
}