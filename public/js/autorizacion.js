window.onload = init;
var api = document.getElementById("api");
function init(){
   console.log("entra al autorizacion");
  
   api.addEventListener("click",acceso);
}

function acceso(){
    let llave = localStorage.getItem("1");
    if(llave != null){
        location.href = "/api";
    }else{
        alert("Tiene que iniciar sesión para ingresar al api");
    }
}