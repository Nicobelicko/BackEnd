window.onload = init;
function init(){
    var URLActual = window.location;
    if(URLActual == "http://127.0.0.1:8000"){
        localStorage.clear();
    }
}