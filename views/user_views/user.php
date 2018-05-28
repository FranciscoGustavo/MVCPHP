<div class="container-fluid">
  <?php include_once "views/layouts/header.php" ?>
  <div class="container p-1">
    <article class="item col-11 col-md-8 col-lg-5 m-auto card-porfile">
      <div class="img-porfile">
        <img src="img/<?php printf($_SESSION['userdata']['image']); ?>" alt="">
      </div>
      <div class="user">
        <h3 class="username"><?php printf($_SESSION['userdata']['username']); ?></h3>
        <h3 class="email"><?php printf($_SESSION['userdata']['email']); ?></h3>
      </div>
      <div class="information">
        <div class="content-information">
          <div class="title">
              <h4>Nombre:</h4>
            </div>
          <div class="info">
              <h4><?php printf($_SESSION['userdata']['first_name']." ". $_SESSION['userdata']['last_name']); ?></h4>
            </div>
        </div>
        <div class="content-information">
          <div class="title">
              <h4>Roll:</h4>
            </div>
          <div class="info">
              <h4>
                <?php
                if($_SESSION['userdata']['roll'] == 1) {printf("Administrador");}
                else {printf("Usuaio Comun");}
                ?>
              </h4>
            </div>
        </div>
      </div>

      <h5>Usuario desde:
       <?php
        $timestamp = strtotime($_SESSION['userdata']['registration_date']);
        $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
        $dia = date('d', $timestamp);
        $mes = date('m', $timestamp) -1	;
        $year = date('Y', $timestamp);
        $fecha = "$dia de " . $meses[$mes] . " del $year";
        printf($fecha);
      ?>
    </h5>
    </article>

    <button class="edit-porfile">Editar</button>
    <?php $_SESSION['userdata'] = null; ?>
  </div>
</div>
