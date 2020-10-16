<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar productos
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar productos</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">
          
          Agregar producto

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>imagen</th>
           <th>codigo</th>
           <th>descripcion</th>
           <th>categoria</th>
           <th>stock</th>
           <th>precio compra</th>
           <th>precio venta</th>
           <th>fecha agregado</th>
           <th>acciones</th>

         </tr> 

        </thead>

        <tbody>

          <?php
            $item = null;
            $valor = null;

            $productos = ControladorProductos::ctrMostrarProductos($item, $valor);

            foreach ($productos as $key => $value) {
             
             echo ' <tr>
                    <td>'.($key+1).'</td>
                    <td><img src="vistas/img/productos/default/iconodefault.png" class="img-thumbnail" width="40px"></td>
                    <td>'.$value["codigo"].'</td>
                    <td>'.$value["descripcion"].'</td>';

                    $item = "id";
                    $valor = $value["id_categoria"];

                    $categoria = ControladorCategorias::ctrMostrarCategorias($item, $valor);
                    
                    echo '<td>'.$categoria["categoria"].'</td>
                    <td>'.$value["stock"].'</td>
                    <td>'.$value["precio_compra"].'</td>
                    <td>'.$value["precio_venta"].'</td>
                    <td>'.$value["fecha"].'</td>
                    <td>

                      <div class="btn-group">
                          
                        <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                        <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                      </div>  

                    </td>

                  </tr>';
            
            }

          ?> 

        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR producto
======================================-->

<div id="modalAgregarProducto" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar producto</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL codigo -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-code"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoCodigo" placeholder="Ingresar codigo" required>

              </div>

            </div>

            <!-- ENTRADA PARA descripcion -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar descripcion" required>

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR categoria -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <select class="form-control input-lg" name="nuevaCategoria">
                  
                  <option value="">Selecionar categoria</option>

                  <option value="Comida">Comida</option>

                  <option value="Aseo">Aseo</option>

                  <option value="Utencilios">Utencilios</option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA stock -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoStock" min="0" placeholder="Ingresar stock" required>

              </div>

            </div>

             <!-- ENTRADA PARA precio compra -->

             <div class="form-group row">

              <div class="col-xs-6">
              
                <div class="input-group">
                
                  <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                  <input type="number" class="form-control input-lg" name="nuevoPrecioCompra" min="0" placeholder="precio compra" required>

                </div>

              </div>

            <!-- ENTRADA PARA precio venta-->

              <div class="col-xs-6">
              
                <div class="input-group">
                
                  <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                  <input type="number" class="form-control input-lg" name="nuevoPrecioVenta" min="0" placeholder="precio venta" required>

                </div>

                <br>

                <!-- checkbox porcentaje-->

                <div class="col-xs-6">
                  
                  <div class="form-group">
                    
                    <label>
                      
                      <input type="checkbox" class="minimal porcentaje" checked>
                      utilizar porcentaje

                    </label>

                  </div>

                </div>

                <!-- entrada porcentaje-->

                <div class="col-xs-6" style="padding:0">
                  
                  <div class="input-group">
                    
                    <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>

                    <span class="input-group-addon"> <i class="fa fa-percent"></i> </span>

                  </div>

                </div>

              </div>

            </div>

            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">subir imagen</div>

              <input type="file" id="nuevaImagen" name="nuevaImagen">

              <p class="help-block">peso maximo 2mb</p>

              <img src="vistas/img/productos/default/iconodefault.png" class="img-thumbnail" width="100px">

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar producto</button>

        </div>

      </form>

    </div>

  </div>

</div>