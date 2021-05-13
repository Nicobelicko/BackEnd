var sesiones = [];
window.onload = init;
function init(){
	console.log("ENTRA A INIT");
	asignarVariables();
	asignarEventos();
}

function asignarVariables() {
	console.log("ENTRA A asignar variables");
	
  sesiones["about"] = document.getElementById("about");
  sesiones["gallery"] = document.getElementById("gallery");
  
  sesiones["drivers"] = document.getElementById("drivers");
  sesiones["index"] = document.getElementById("index");
  sesiones["contact"] = document.getElementById("contact");
}
function asignarEventos(){
	console.log("ENTRA A asignar eventos");
	var temp;
	for(var i in sesiones){
		temp = sesiones[i];
		temp.addEventListener("click",navegacion);
	}
}
function navegacion(event){
	console.log("ENTRA A navegacion");
    //console.log(event, target);
	var id = event.target.id;
	location.href= id;
	
}
