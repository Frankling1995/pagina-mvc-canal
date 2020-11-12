export default class UI{

    async rendernoticia (response,template,fragment){

        const data = await response ;
        data.forEach((data)=>{
            template.innerHTML+= `<a href="" >
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
           
            fragment.appendChild(template);
    }
    
    );
     return fragment;

} 
}