<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require_once 'views/layouts/resources.html' ?>
    <title></title>
  </head>
  <body>
  <?php
    session_start();
    if (isset($_SESSION['user'])) {
      if (!isset($_SESSION['userdata']) || $_SESSION['userdata'] == null) {
        header('Location: controllers/main_controller.php?controller=users&action=view&user='.$_SESSION['user']);
      }
      $_POST['validate'] = true;
      require_once 'views/user_views/user.php';
      $_POST['validate'] = null;
    } else {
      $_POST['validate'] = null;
      header('Location: /PHPMVC');
    }
  ?>
    <script src="js/main.js" ></script>
  </body>
</html>
