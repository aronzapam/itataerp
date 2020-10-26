<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      tablero
      
      <small>panel de control</small>
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> inicio</a></li>
      
      <li class="active">tablero</li>
    
    </ol>

  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Bienvenidos al sistema</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <?php

        if($_SESSION["perfil"] == "Especial" || $_SESSION["perfil"] =="Vendedor" || $_SESSION["perfil"] =="Administrador"){

          echo '<h1>Bienvenid@s ' .$_SESSION["nombre"].'</h1>';
        }

        ?>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        Footer
      </div>
      

    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->