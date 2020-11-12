

export default class API {

   


    async Get_noticia(){
         const response = await fetch('http://localhost/pagina-mvc-canal/noticia/noticiasdata');
         const data = await response.json();
         
         return data;
       
    }




}