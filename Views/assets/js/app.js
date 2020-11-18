import API from '/pagina-mvc-canal/Views/assets/js/module/API.js'
import UI from '/pagina-mvc-canal/Views/assets/js/module/UI.js'

//declacion de variables de importancia 
const fragment = document.createDocumentFragment();
const api= new API();
const ui= new UI();
const noticiap=api.ObtenernoticiasP();
const formulario = document.querySelector('#formlogin');
//incio de seccion
formulario.addEventListener('submit',(e)=>{
    e.preventDefault();
    const datosform = new FormData(formulario);
       api.validarlogin(datosform);
});
//rederizar noticias pagina principal
    ui.rendernoticiap(noticiap,fragment);

