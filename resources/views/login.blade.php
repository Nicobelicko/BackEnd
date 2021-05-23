<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    
    <script>
        let boton;
        let emailL,
            passwordL;
        window.onload = () =>{
           boton =  document.getElementById("btn-registrarse");
           emailL = document.getElementById("input-email");
           passwordL = document.getElementById("input-contraseña");

           boton.addEventListener("click", ()=>{
            enviarDatosLogin({
                
                email:emailL.value,
                password:passwordL.value
            });
           });

           function enviarDatosLogin(datos){
            
            axios({
                method: 'post',
                url: 'api/auth/login',
                data:{
                    email:datos.email,
                    password:datos.password
                    }
                }).then((data)=>{
                    //console.log(data.data.token);
                    localStorage.setItem("1","logueado");
                    alert("Inicio de Sesión Exitoso");
                    location.href = "/api";
                }).catch(function(error){
                    alert("Error en el correo y/o contraseña");
                });
            }
        }
    </script>

</head>
<body id="body-registrarse">

    <form action="api/login" method="POST" id="form">
        <div class="form">
            <h1 id="h1-registro">Login</h1>
            <div class="gru">
                <input type="email" name="email" id="input-email" required><span class="barra"></span>
                <label>Email</label>
            </div>
            <div class="gru">
                <input type="password" name="password" id="input-contraseña" required><span class="barra"></span>
                <label>Contraseña</label>
            </div>

            <input id="btn-registrarse" type="button" value="Registrarse" >
          



        </div>
    </form>
    <scrip src="js/main.js" type="text/javascript"></scrip>
</body>
</html>
