

export default class API {




    async ObtenernoticiasP(){
        const response = await fetch('http://localhost/pagina-mvc-canal/noticia/noticiasp');
        const data = await response.json();
        return data;
    }




}