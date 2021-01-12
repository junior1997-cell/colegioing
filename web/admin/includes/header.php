<?php
if (strlen(session_id()) < 1)
  session_start();
?>
<header class="main-header">
  <!-- Logo -->
  <a href="municipalidad.php" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>CIP</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>CIP | </b>Moyobamba</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Menú de navegación</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="recursos/img/user.png" class="user-image" alt="User Image">
          <span class="hidden-xs"><?php echo $_SESSION['usuario'] ?></span>
        </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="recursos/img/user.png" class="img-circle" alt="User Image">
              <p>
                <?php echo $_SESSION['usuario'] ?>
                <small>ADMINISTRADOR</small>
              </p>
            </li>
            <!-- Menu Body -->

            <!-- Menu Footer-->
            <li class="user-footer">

              <div class="pull-right">
                <a href="../ajax/CUsuario.php?op=salir" class="btn btn-default btn-flat">Cerrar</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
      </ul>
    </div>
  </nav>
</header>
