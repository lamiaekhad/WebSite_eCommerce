var sidenav = document.getElementById("mySidenav");
var openBtn = document.getElementById("openBtn");
var closeBtn = document.getElementById("closeBtn");

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

/* Set the width of the side navigation to 250px */
function openNav() {
  sidenav.classList.add("active");
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  sidenav.classList.remove("active");
}

let choix = true;

function change(){
  let button = document.getElementById("coeur");
  if (choix==true){
    alert("Confirmation");
    button.style.fill = "red";
    choix = false;
  }else{
    button.style.fill = "black";
    choix = true;
  }
}

