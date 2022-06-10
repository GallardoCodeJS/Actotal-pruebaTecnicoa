<!DOCTYPE HTML>

<html lang="es">

<head>
  <title>Ingreso de datos</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <!-- Style -->
  <link rel="stylesheet" href="<?php echo $generalstyle;?>" type="text/css">
  <link rel="stylesheet" href="<?php echo $viewuserstyle;?>" type="text/css">
  <link rel="stylesheet" href="<?php echo $responsivestyle;?>" type="text/css">
  <link rel="stylesheet" href="<?php echo $responsiveviewuser;?>" type="text/css">
  
  
  <!-- Scripts -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo $scriptfunctions?>" type="text/javascript"></script>
  <script src="<?php echo $scriptfunctionsform?>" type="text/javascript"></script> 
  <meta name="viewport" content="width=device-width" />

</head>

<body>
      <header id="headerimg">
        <div class="main-img">
          <img src="../source/ACTotal-logo.png">
        </div>
      </header>
      

      <main>
        <!-- Div principal -->
        <div class="main-form">
          

          <!-- Div de nuevo usuario -->
          <div class="newuser">            

            <!-- Div de titulo -->
            <div class="newuser-h1">
              <h1>Ingreso de Datos</h1>
            </div>

            <!-- Form Create User -->
            <div class="Createuser-section">

              <div class="createuser">

                <div class="createuserson-label">
                  <form name="newuserform" role="form" class="newuserform" method="post">
                    <label>Nombre:</label>
                    <br>                  
                    <label>Email:</label>
                    <br>
                    <label>Teléfono:</label>
                </div>

                  <div class="createuserson">  
                    <input type="text" name="name" id="name" oninput="nameValueChange()" onclick="nameValueChange()" maxlength="30" require/>
                    <br>  
                    <input type="email" name="email" id="email" oninput="emailValueChange()" onclick="emailValueChange()" maxlength="40" require/>
                    <br>
                    <input type="text" name="phone" id="phone" oninput="phoneValueChange()" onclick="phoneValueChange()" maxlength="14" require/>
                    <br>
                    <button type="submit" id="butsave">Guardar</button>
                  <form>                  
                </div>

              </div>
              
              <p><a href="javascript:mostrar();">Ayuda Formatos</a></p>

            </div>

            <!-- Notificaciones -->
            <div id="msj">
              <!-- Mensaje de success -->
              <div id="success" class="userinfo" style="display:none;"></div>
              <!-- Mensaje de error -->
              <div id="emptyfield" class="userinfo" style="display:none;"></div>
              <!-- Database error -->
              <div id="dberror" class="userinfo" style="display:none;"></div>
              <!-- Mensjade de referencia -->
              <div id="Ref" class="userinfo" style="display:none;">

                <p>-Formatos de campo- </br> Nombre: </br>"2 o mas letras (Max 15) (a-z o A-Z), espacio (Obligatorio), 2 o mas letras (a-z o A-Z) (Max 15) <br/>Ejemplo: "Ignacio Gallardo"</p>
                <p>Correo: </br>XXXX@XXX.XX </br>Ejemplo: "Gallardoignacio1995@gmail.com"</p>
                <p>Telefono: </br>Numero de 8 a 14 </br>Ejemplo: "08006611"</p>
                
                <div id="close">
                  <a href="javascript:cerrar();">cerrar(X)</a>
                </div>
              </div>
              
            </div>
            
          </div>

          <!-- Div mostrando usuario -->
          <div class="showuser">

            <div class="showuser-h1">
              <h1>Datos de usuario</h1>              
            </div>            
            
            <!-- Donde se inserta la tabla -->
            <div class="showuser-section" id="table">
            </div>
          </div>

          </div> <!-- Cierre de div principal -->
      </main>
      
      <!-- <footer>
        <small>Designed by <a href="http://www.linkedin.com/in/ignacio-gallardo-leal-47b13415b" target="_blank">Ignacio Gallardo.</a></small>
      </footer> -->
</body>
</html>