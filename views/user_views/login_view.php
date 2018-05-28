<?php
  if(isset($_POST['validate'])){
    if ($_POST['validate'] !== true) {
      header('Location: /PHPMVC');
    }
  } else {
    header('Location: /PHPMVC');
  }
?>
<div class="container-fluid full-height image-background">
  <div class="container-form">
    <div class="">
      <h1 class="title txt-center p_75">Iniciar sesion</h1>
    </div>
    <div class="form" id="form">
      <form class="form" action="controllers/main_controller.php?controller=users&action=login" method="post">
        <div class="input-form">
          <input id="email" type="email" name="email" required>
          <label for="email">Correo electronico</label>
        </div>
        <div class="input-form">
          <input id="password" type="password" name="password" required>
          <label for="password">Contraseña</label>
        </div>
        <div class="buttons">
          <a href="#">¿Has olvidado tu contraseña?</a>
          <input type="submit" name="" value="Acceder">
        </div>
      </form>
    </div>
  </div>
</div>
