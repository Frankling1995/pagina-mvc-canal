

export default class API {

   


    async Get_noticia(){
        const response = await fetch('http://localhost/pagina-mvc-canal/noticia/noticiasp');
        const data = await response.json();
        return data;
    }




}