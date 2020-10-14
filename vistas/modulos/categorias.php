<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      administrar categorias
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> inicio</a></li>
      
      <li class="active">administrar categorias</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
          
          agregar usuario

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
              
              <th style="width:10px">#</th>
              <th>categoria</th>
              <th>acciones</th>

            </tr>

          </thead>

          <tbody>
            <tr>
              
                    <td>1</td>
                    <td>EQUIPOS </td>
                    <td>admin</td>
                    <td><img src="vistas/img/usuarios/default/iconodefault.png" class="img-thumbnail" width="40px"></td>
                    <td> Administrador</td>
                    <td><button class="btn btn-success btn-xs"> activado</button></td>
                    <td>2020-10-14 11:15</td>
                    <td>

                      <div class="btn-group">
                        
                        <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                      </div>

                    </td>

                  </tr>

          <tr>
              
                    <td>1</td>
                    <td>EQUIPOS ELECTROMECANICOS</td>
                    <td>admin</td>
                    <td><img src="vistas/img/usuarios/default/iconodefault.png" class="img-thumbnail" width="40px"></td>
                    <td> Administrador</td>
                    <td><button class="btn btn-success btn-xs"> activado</button></td>
                    <td>2020-10-14 11:15</td>
                    <td>

                      <div class="btn-group">
                        
                        <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                      </div>
                      
                    </td>

                  </tr>


        <tr>
              
                    <td>1</td>
                    <td>EQUIPOS ELECTROMECANICOS</td>
                    <td>admin</td>
                    <td><img src="vistas/img/usuarios/default/iconodefault.png" class="img-thumbnail" width="40px"></td>
                    <td> Administrador</td>
                    <td><button class="btn btn-success btn-xs"> activado</button></td>
                    <td>2020-10-14 11:15</td>
                    <td>

                      <div class="btn-group">
                        
                        <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                      </div>
                      
             </td>

          </tr>
            

          </tbody>

        </table>

      </div>
      
    </div>
    
  </section>
  
</div>

<!--MODAL AGREGAR USUARIO-->

<div id="modalAgregarCategoria" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

        <form role="form" method="post" >

        <!--CABEZA DEL MODAL-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Categoria</h4>

        </div>

         <!--CUERPO DEL MODAL-->

        <div class="modal-body">

          <div class="box-body">

            <!-- Entrada para el nombre -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

              <input text="text" class="from-control input-lg" name ="nuevaCategoria" placeholder="Ingresar categoria" required>

              </div>

            </div>

          </div>

        </div>

         <!--PIE DEL MODAL-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Categoria</button>

        </div>

        <?php

        $crearUsuario = new ControladorUsuarios();
        $crearUsuario -> ctrCrearUsuario();

        ?>

      </form>

    </div>

  </div>

</div>

<!--MODAL EDITAR USUARIO-->

<div id="modalEditarUsuario" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

        <form role="form" method="post" enctype="multipart/form-data">

        <!--CABEZA DEL MODAL-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">editar Usuario</h4>

        </div>

         <!--CUERPO DEL MODAL-->

        <div class="modal-body">

          <div class="box-body">

            <!-- Entrada para el nombre -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>

              <input text="text" class="from-control input-lg" id="editarNombre" name="editarNombre" value="" required>

              </div>

            </div>
            <!-- Entrada para el USUARIO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-key"></i></span>

              <input text="text" class="from-control input-lg" id="editarUsuario" name="editarUsuario" value="" required>

              </div>

            </div>

            <!-- Entrada para el CONTRASEÑA -->

             <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-lock"></i></span>

              <input text="text" class="from-control input-lg" name ="editarPassword" placeholder="Nueva Contraseña " required>

              </div>

            </div>

            <!-- Entrada para seleccionar su Perfil -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select  class ="form-control input-lg" name ="editarPerfil">

                  <option value="" id="editarPerfil"></option>

                  <option value="Administrador">Administrador</option>

                  <option value="Especial">Especial </option>

                  <option value="Vendedor">Vendedor </option>

                </select>

              </div>

            </div>

            <!-- Entrada para subir foto  -->

            <div class="form-group">

            <div class="panel"> Subir foto</div>

            <input type="file" class="nuevaFoto" name="editarFoto">

            <p class="helper-block">foto </p>

            <img src="vistas/img/usuarios/default/iconodefault.png" class="img-thumbnail previsualizar" width="100px">

            </div>

          </div>

        </div>

         <!--PIE DEL MODAL-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">modificar usuario</button>

        </div>

        <!--<?php

        $crearUsuario = new ControladorUsuarios();
        $crearUsuario -> ctrCrearUsuario();

        ?> -->

      </form>

    </div>

  </div>

</div>