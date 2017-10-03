<!DOCTYPE>
<html lang ="ES">
    <head>
        <meta  http-equiv="Content-Type" content="text/html" charset="utf-8"> 

        <link rel="stylesheet" type="text/css" href="../css/formulario.css" media="screen" />
      <title> Formulario de Registro </title>
        
    </head>
    
    
    <body>
        <h1>Formulario de Registro</h1>
        <form action="registrousuarios.php" method="post" class="form-registrer">
        <h2 class="titulo">CREA UNA CUENTA</h2>
            <div class="contenedor-vistas">
            
               
                <input type="text" name="nombres" placeholder="Nombre..."class="input-100" required>
                <input type="text" name="apellidos" placeholder="Apellidos... "class="input-100" required>
                <input type="text" name="tipo" placeholder="Tipo Documento" class="input-50" required>
                <input type="text" name="idusuario" placeholder="Documento..." class="input-50" required>
                <input type="emeil" name="correo" placeholder="correo..."class="input-100" required>
                <input type="password" name="contraseña" placeholder="Contraseña..." class="input-50" required>
                <input type="date" name="nacimiento" placeholder="Fecha Nacimiento..." class="input-50" required>
                <input type="text" name="genero" placeholder="Genero..." class="input-10" required>
                <input type="text" name="rol" placeholder="rol" class="input-10" required>
                <input type="text" name="sexo" placeholder="sexo..." class="input-10" required> 
                <input type="submit" value="registrar" class="btn-enviar">
                <p class="form-limk">¿Ya tienes una Cuenta? <a href="#">Ingresa Aqui</a></p>
                            
                
                
            </div>
        
        
        </form>
        

    </body>
    
    
</html>