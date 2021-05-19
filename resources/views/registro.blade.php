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
        let name,
            email,
            password;
        window.onload = () =>{
           boton =  document.getElementById("btn-registrarse");
           name = document.getElementById("input-name");
           email = document.getElementById("input-email");
           password = document.getElementById("input-contraseña");

           boton.addEventListener("click", ()=>{
            enviarDatos({
                name:name.value,
                email:email.value,
                password:password.value
            });
           });

           function enviarDatos(datos){
            
            axios({
                method: 'POST',
                url: 'api/registro',
                data:{
                    name:datos.name,
                    email:datos.email,
                    password:datos.password
                    }
                }).then((data)=>{
                  localStorage.setItem("token",data.data.token);
                  alert("Usuario registrado");
                  location.href = "/index";
                });
            }
        }
    </script>

</head>
<body id="body-registrarse">

    <form action="api/registro" method="POST" id="form">
        <div class="form">
            <h1 id="h1-registro">Registro</h1>
            <div class="gru">
                <input type="text" name="name" id="input-name" required><span class="barra"></span>
                <label>Nombre</label>
            </div>
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
    <script src="js/main.js" type="text/javascript"></script>
</body>
</html>
