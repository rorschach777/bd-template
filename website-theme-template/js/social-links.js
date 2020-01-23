function socialLinks(){
   var icons = document.getElementsByClassName('et-social-icon');
   var iconsList = [...icons];
   iconsList.forEach(currentIcon=>{
       let link = currentIcon.childNodes[1];
       link.setAttribute('target', 'blank');
   })
}
socialLinks();