import API from '/pagina-mvc-canal/Views/assets/js/module/API.js'
import UI from '/pagina-mvc-canal/Views/assets/js/module/UI.js'

const contenedornoticias = document.querySelector('#seccion-noticias ');
const noticias = document.querySelector('#Cards-noticias ');

const fragment = document.createDocumentFragment();
const a=[{text:'da'},{text:'da2'},{text:'da3'},{text:'da5'},{text:'da7'},{text:'da6'}];
/**
a.forEach((data)=>{
noticias.innerHTML+= `<a href="" >
<div class="col-md-4 text-center mb-4">
        <div class="imagen-noticia">
            <div class="img-p">
                <img class=" img-fluid  " src="Upload/02.jpg" >
            </div>
            <div class="row  no-gutters justify-content-center">
                <div class="col-md-10  pt-4 noticia-info">
                <h3 class="text-center text-uppercase">nombre de la notica</h3>
                <p class="text-center text-lowercase ">
                Desarrollaremos un sistema modelo vista controlador básico, justo para entender 
                ¿Cómo funciona este patrón de diseño de arquitectura de Software? <br>
                Pero antes. El MVC separa tres aspectos 
                </p>
                <a href="" class="btn btn-primary btn-block text-uppercase mt-4 py-2">leer noticia</a>
                </div>
            </div>
        </div>
    </div>
</a>`
    fragment.appendChild(noticias);
});
contenedornoticias.appendChild(fragment);

 */


const api= new API();
const ui= new UI();
const noticiacard=api.Get_noticia();


ui.rendernoticia(noticiacard,noticias, fragment).then((fragment)=>contenedornoticias.appendChild(fragment));