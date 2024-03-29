<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Atarea2!</title>
  <link href="../../public/Style/styleIndex.css" rel="stylesheet" />
  <script src="../../public/JS/Script.js"></script>
</head>

<body>
  <div style="background-color: #46454592;">    
    <h1>ATAREA2</h1>
    <h3>Tu aplicación para gestión de tareas de confianza</h3>
  </div>
  <div class="cotn_principal">
    <div class="cont_centrar">
      <div class="cont_login">
        <div class="cont_info_log_sign_up">
          <div class="col_md_login">
            <div class="cont_ba_opcitiy">
              <h2>ACCESO</h2>
              <p>Accede a tus tareas de Atarea2. Añade, modifica y elimina.</p>
              <button class="btn_login" onclick="change_to_login()">
                Acceder
              </button>
            </div>
          </div>
          <div class="col_md_sign_up">
            <div class="cont_ba_opcitiy">
              <h2>REGISTRO</h2>
              <p>
                Si aún no tienes cuenta en Atarea2, este es tu lugar.
                ¡Registrate ya!
              </p>
              <button class="btn_sign_up" onclick="change_to_sign_up()">
                Registrarse
              </button>
            </div>
          </div>
        </div>

        <div class="cont_back_info">
          <div class="cont_img_back_grey">
            <img src="../../public/Img/Libros.jpeg" alt="" />
          </div>
        </div>
        <div class="cont_forms">
          <div class="cont_img_back_">
            <img src="../../public/Img/Libros.jpeg" alt="" />
          </div>
          <div class="cont_form_login">
            <a href="#" onclick="hidden_login_and_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
            <h2>ACCESO</h2>
            <form action="./PHP/login.php" method="post">
              <br>
              <input type="text" name="usuario" placeholder="Usuario" style="width: 260px; height: 20px; padding: 10px; font-size: 16px; border-radius: 15px;" />
              <br><br>
              <input type="password" name="password" placeholder="Password" style="width: 260px; height: 20px; padding: 10px; font-size: 16px; border-radius: 15px;" />
              <br><br>
              <button class="btn_login" type="submit" value="Iniciar sesión" onclick="change_to_login()">
                Acceder
              </button>
            </form>
          </div>

          <div class="cont_form_sign_up">
            <a href="#" onclick="hidden_login_and_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
            <h2>REGISTRO</h2>
            <form action="./PHP/registro.php" method="post">
              <br>
              <input type="text" name="usuario" placeholder="Usuario" style="width: 260px; height: 20px; padding: 10px; font-size: 16px; border-radius: 15px;" />
              <br><br>
              <input type="password" name="password" placeholder="Password" style="width: 260px; height: 20px; padding: 10px; font-size: 16px; border-radius: 15px;" />
              <br><br>
              <input type="password" name="password2" placeholder="Confirmar Password" style="width: 260px; height: 20px; padding: 10px; font-size: 16px; border-radius: 15px;" />
              <br><br>
              <button class="btn_sign_up" type="submit" value="Registrar" onclick="change_to_sign_up()">
                Registrarse
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>