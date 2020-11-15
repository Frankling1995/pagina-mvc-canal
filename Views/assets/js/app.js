import API from '/pagina-mvc-canal/Views/assets/js/module/API.js'
import UI from '/pagina-mvc-canal/Views/assets/js/module/UI.js'


const fragment = document.createDocumentFragment();
const api= new API();
const ui= new UI();
const noticiacard=api.ObtenernoticiasP();


ui.rendernoticia(noticiacard,fragment);

