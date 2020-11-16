import API from '/pagina-mvc-canal/Views/assets/js/module/API.js'
import UI from '/pagina-mvc-canal/Views/assets/js/module/UI.js'


const fragment = document.createDocumentFragment();
const api= new API();
const ui= new UI();
const noticiap=api.ObtenernoticiasP();


ui.rendernoticiap(noticiap,fragment);

