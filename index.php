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
      if (!isset($_SESSION['productsdata']) || $_SESSION['productsdata'] == null) {
        header('Location: controllers/main_controller.php?action=load');
      }
      $_POST['validate'] = true;
      require_once 'views/main/main_page.php';
      $_POST['validate'] = null;
    } else {
      $_POST['validate'] = true;
      require_once 'views/user_views/login_view.php';
      $_POST['validate'] = null;
    }
  ?>
    <script src="js/main.js" ></script>
  </body>
</html>
