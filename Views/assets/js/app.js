import API from '/pagina-mvc-canal/Views/assets/js/module/API.js'
import UI from '/pagina-mvc-canal/Views/assets/js/module/UI.js'

//declacion de variables de importancia 
const fragment = document.createDocumentFragment();
const api= new API();
const ui= new UI();
//incio de seccion
    ui.InicioSesion(api);
//rederizar noticias pagina principal
    ui.rendernoticiap(api.ObtenernoticiasP(),fragment);

