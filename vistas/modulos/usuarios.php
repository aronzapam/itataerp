<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      administrar usuarios
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> inicio</a></li>
      
      <li class="active">administrar usuarios</li>
    
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
        
        <table class="table table-bordered table-striped">
          
          <thead>
            
            <tr>
              
              <th>#</th>
              <th>nombre</th>
              <th>usuario</th>
              <th>perfil</th>
              <th>estado</th>
              <th>ultimo login</th>
              <th>acciones</th>

            </tr>

          </thead>

          <tbody>
            
            <tr>
              
              <td>1</td>
              <td>usuario administrador</td>
              <td>admin</td>
              <td><img src="vistas/img/usuarios/default/icono default.png" class="img-thumbnail" width="40px"></td>
              <td>administrador</td>
              <td><button class="btn btn-success btn-xs"> activado</button></td>
              <td>9/10/2020</td>
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


<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>