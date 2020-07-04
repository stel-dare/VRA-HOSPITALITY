window.onscroll = function() {stickNav()};

var nav = document.getElementById("nav");
var sticky = nav.offsetTop;

function stickNav() {
  if (window.pageYOffset > sticky) {
    nav.classList.add("sticky");
  } else {
    nav.classList.remove("sticky");
  }
}

function showMenu(){
    document.getElementById('nav-links').classList.toggle('hide');
}