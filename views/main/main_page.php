<?php
  if(isset($_POST['validate'])){
    if ($_POST['validate'] !== true) {
      header('Location: /PHPMVC');
    }
  } else {
    header('Location: /PHPMVC');
  }
?>
<div class="container-fluid">
  <?php include_once "views/layouts/header.php" ?>
  <div class="container p-1">
    <h1>Productos</h1>

      <div class="row">
        <div class="col1">
          <h2>Producto</h2>
        </div>
        <div class="col2">
          <h2>Unidad</h2>
        </div>
        <div class="col1">
          <h2>Descriptcion</h2>
        </div>
        <div class="col2">
          <h2>imagen</h2>
        </div>
        <div class="col1">
          <h2>Precio</h2>
        </div>
        <div class="col2">
          <h2>Existencia</h2>
        </div>
      </div>

      <div class="row">
        <div class="col1">
          <p><?php
            printf($_SESSION['productsdata']['title']);
           ?></p>
        </div>
        <div class="col2">
          <p><?php
            printf($_SESSION['productsdata']['unity']);
           ?></p>
        </div>
        <div class="col2">
          <p><?php
            printf($_SESSION['productsdata']['description']);
           ?></p>
        </div>
        <div class="col2">
          <img src="img/<?php
            printf($_SESSION['productsdata']['image']);
           ?>" alt="">
        </div>
        <div class="col2">
          <p><?php
            print_r($_SESSION['productsdata']['pricing']);
           ?></p>
        </div>
        <div class="col2">
          <p><?php
            print_r($_SESSION['productsdata']['existence']);
           ?></p>
        </div>
      </div>
    </article>
  </div>
</div>

<?php
  print_r($_SESSION['productsdata']);
  $_SESSION['productsdata'] == null;

 ?>

<style media="screen">
  .row {
    display: flex;
    justify-content: space-around;
  }
  .col1, .col2 {
    display: block;
    width: 16.6667%;
    text-align: left;
  }
</style>
