<?php
if (strlen(session_id()) < 1) {
    session_start();
}

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
        <a href="contactanos.php">
          <i class="fa fa-newspaper-o"></i> <span>Contactanos y Empresa</span>
        </a>
        <li id="mCompras" class="treeview">
          <a href="#">
            <i class="fa fa-university"></i>
            <span>Institucion</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li id="lIngresos"><a href="nosotros.php"><i class="fa fa-circle-o"></i> Nosotros</a></li>
            <li id="lProveedores"><a href="historia.php"><i class="fa fa-circle-o"></i> Historia</a></li>
            <li id="lProveedores"><a href="directiva.php"><i class="fa fa-circle-o"></i> Directiva</a></li>
            <li id="lProveedores"><a href="docnorma.php"><i class="fa fa-circle-o"></i> Doc. Normativos</a></li>
          </ul>
        </li>
        <li id="mCompras" class="treeview">
          <a href="#">
            <i class="fa fa-file-text-o"></i>
            <span>Tramítes</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li id="lIngresos"><a href="colegiatura.php"><i class="fa fa-circle-o"></i> Colegiatura</a></li>
            <li id="lProveedores"><a href="historia.php"><i class="fa fa-circle-o"></i> Requisitos para colegiatura </a></li>
            <li id="lProveedores"><a href="certihabilidad.php"><i class="fa fa-circle-o"></i>Certificados de habilidad</a></li>
            <li id="lProveedores"><a href="proveedor.php"><i class="fa fa-circle-o"></i>Otros</a></li>
            <li id="lProveedores"><a href="proveedor.php"><i class="fa fa-circle-o"></i>Tarifario</a></li>
          </ul>
        </li>
        <li>
        <a href="capitulos.php">
          <i class="fa fa-newspaper-o"></i> <span>Capítulos</span>
        </a>
      </li>

        <li id="servicios" class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>servicios</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li id="lIngresos"><a href="benficio_cole.php"><i class="fa fa-circle-o"></i> Beneficio al colegiado</a></li>
            <li id="lProveedores"><a href="especial_ing.php"><i class="fa fa-circle-o"></i> Especialización de ingeniería</a></li>
            <li id="lProveedores"><a href="#"><i class="fa fa-circle-o"></i> Capacitaciones</a></li>
            <li id="lProveedores"><a href="#"><i class="fa fa-circle-o"></i> Alquiler</a></li>
          </ul>
        </li>

        <li id="mConsultaV" class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i> <span>Publicaciones</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li id="lConsulasV"><a href="comunicados.php"><i class="fa fa-circle-o"></i> Comunicados</a></li>
            <li id="lConsulasV"><a href="eventos.php"><i class="fa fa-circle-o"></i> EVENTOS</a></li>
            <li id="lConsulasV"><a href="comunicados.php"><i class="fa fa-circle-o"></i>NOTICIAS</a></li>
            <li id="lConsulasV"><a href="comunicados.php"><i class="fa fa-circle-o"></i>CEREMONIAS DE COLEGIATURA</a></li>
            <li id="lConsulasV"><a href="comunicados.php"><i class="fa fa-circle-o"></i>ACTIVIDADES</a></li>
            <li id="lConsulasV"><a href="convenios.php"><i class="fa fa-handshake-o"></i>CONVENIOS</a></li>
            <li id="lConsulasV"><a href="galeria.php"><i class="fa fa-circle-o"></i>GELERIA</a></li>
            <li id="lIngresos"><a href="nosotros.php"><i class="fa fa-circle-o"></i> Nosotros</a></li>
            <li id="lProveedores"><a href="historia.php"><i class="fa fa-circle-o"></i> Historia</a></li>
            <li id="lProveedores"><a href="directiva.php"><i class="fa fa-circle-o"></i> Directiva</a></li>
            <li id="lProveedores"><a href="proveedor.php"><i class="fa fa-circle-o"></i> Doc. Normativos</a></li>
          </ul>
        </li>






      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
