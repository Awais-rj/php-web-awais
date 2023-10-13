//Navbar
var prevScrollpos = window.pageYOffset;
window.onscroll =function(){
  var currentScrollpos =window.pageYOffset;
  if(prevScrollpos > currentScrollpos){
    document.getElementById("anav").style.top= "0px";
  } else{
    document.getElementById("anav").style.top="-50px";
  }
  prevScrollpos=currentScrollpos;
}