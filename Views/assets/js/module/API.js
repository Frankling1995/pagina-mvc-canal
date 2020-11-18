

export default class API {




    async ObtenernoticiasP(){
        const response = await fetch('http://localhost/pagina-mvc-canal/noticia/noticiasp');
        const data = await response.json();
        return data;
    }

    validarlogin(data){
        fetch('http://localhost/pagina-mvc-canal/Admin/Validacion',{ 
            method:'POST',
            body:data
        }).then(response => response.json())
        .then(r=>{
            if(r.state===true){
                location.href='http://localhost/pagina-mvc-canal/Admin/principal';
            }else{
                console.log(r.state)
            }


        })
    }
    
    

    }




