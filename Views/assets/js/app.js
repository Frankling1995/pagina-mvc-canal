import API from '/pagina-mvc-canal/Views/assets/js/module/API.js'
import UI from '/pagina-mvc-canal/Views/assets/js/module/UI.js'

const contenedornoticias = document.querySelector('#seccion-noticias ');
const noticias = document.querySelector('#Cards-noticias ');
const fragment = document.createDocumentFragment();

const api= new API();
const ui= new UI();
const noticiacard=api.Get_noticia();

if(contenedornoticias){
ui.rendernoticia(noticiacard,noticias, fragment,contenedornoticias);
}
