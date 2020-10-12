const media = document.getElementById('media');


const mediaid = ()=>{ 
    fetch('http://localhost/mvc-gestor-canal/Media/Mediaid&id=1')
    .then(r => r.json())
    .then(data => console.log(data)) // 2
}

if(media){
   mediaid();
   let='solo';

}
 