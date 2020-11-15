export default class UI{

     noticias;
     contenedornoticias;
     
    constructor(){
         this.contenedornoticias = document.querySelector('#seccion-noticias ');
         this.noticias = document.querySelector('#Cards-noticias ');
        
    }

    async rendernoticia (response,fragment){

        if(this.contenedornoticias){
            const data = await response ;
            data.forEach((data)=>{
                this.noticias.innerHTML+= `<a href="" >
                <div class="col-md-4 text-center mb-4">
                        <div class="imagen-noticia">
                            <div class="img-p">
                                <img class=" img-fluid  " src="Upload/02.jpg" >
                            </div>
                            <div class="row  no-gutters justify-content-center">
                                <div class="col-md-10  pt-4 noticia-info">
                                <h3 class="text-center text-uppercase">${data.Titulo}</h3>
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
            
                fragment.appendChild(this.noticias);
        }
        
        );
    
        this.contenedornoticias.appendChild(fragment)
        }

      console.log(this.noticias)
    

} 
}