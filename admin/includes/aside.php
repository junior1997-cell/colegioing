<?php
if (strlen(session_id()) < 1)
  session_start();
?>
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="recursos/img/user.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $_SESSION['usuario'] ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> En linea</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MENÚ PRINCIPAL</li>

      <li>
        <a href="usuario.php">
        <i class="fa fa-user"></i> <span>Usuarios</span>

      </a>
      </li>
      <li>
        <a href="carousel.php">
        <i class="fa fa-newspaper-o"></i> <span>Carousel</span>
      </a>
      </li>
      <li>
        <a href="paquetes.php">
        <i class="fa fa-newspaper-o"></i> <span>Paquetes</span>
      </a>
      </li>
      <li>
        <a href="pasajes.php">
        <i class="fa fa-newspaper-o"></i> <span>Pasajes</span>
      </a>
      </li>
      <li>
        <a href="turisticos.php">
        <i class="fa fa-newspaper-o"></i> <span>Turismo</span>
      </a>
      </li>
      <li>
        <a href="contactanos.php">
        <i class="fa fa-newspaper-o"></i> <span>Contactanos y Empresa</span>
      </a>
      </li>


    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
