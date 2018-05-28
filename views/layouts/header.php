<div class="container-fluid header">
  <header class="container">
    <div class="control-nav">
      <a class="logo" href="/PHPMVC">BG</a>
      <div class="icon-container">
        <i class="icon fas fa-bars"></i>
      </div>
    </div>
    <nav class="nav">
      <ul>
        <li><a href="/PHPMVC">Inventario</a></li>
        <li><a href="controllers/main_controller.php?controller=users&action=view&user=<?php echo $_SESSION['user'] ?>">Perfil</a></li>
        <li><a href="controllers/main_controller.php?controller=users&action=destroysession">Cerrar sesion</a></li>
      </ul>
    </nav>
  </header>
</div>
