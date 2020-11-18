export default class UI{

    noticias;
    contenedornoticias;
    formulario;
    
    constructor(){
        this.contenedornoticias = document.querySelector('#seccion-noticias ');
        this.noticias = document.querySelector('#Cards-noticias ');
      
    }

    rendernoticiap = async  (response,fragment)=>{
        if(this.contenedornoticias){
            const data = await response ;
            data.forEach((data)=>{
                    this.noticias.innerHTML+= `
                    <div class="col-md-4 text-center mb-4">
                            <div class="imagen-noticia">
                                <div class="img-p">
                                    <img class=" img-fluid  " src="Upload/02.jpg" >
                                </div>
                                <div class="row  no-gutters justify-content-center">
                                    <div class="col-md-10  pt-4 noticia-info">
                                    <h3 class="text-center text-uppercase">${data.Titulo}</h3>
                                    <div class="text-center text-lowercase contenido ">
                                        ${this.recortaDatos(data.Contenido)}
                                    </div>
                                    <a href="" class="btn btn-primary btn-block text-uppercase mt-4 py-2">leer noticia</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `
                fragment.appendChild(this.noticias);
            });
            this.contenedornoticias.appendChild(fragment)
        }
    }

    recortaDatos(data){
        let  respuesta = data;
        if(data.length>200){
            respuesta = `${data.slice(0,200)}...`;
        }
        return respuesta;
    }
    
    

    
}