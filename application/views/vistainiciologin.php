<? $this->load->view('header')?>
	


<div class="row">
  <div class="col-md-4">
     <h3>Ingresa con tu cuenta</h3>
<form  id="formulario"action="<?=base_url()?>/index.php/controladorlogin/log"  method="post">
  
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre de Usuario</label>
    <input type="text" class="form-control" id="nombre_y_apellido" name="nombre"placeholder="Ingrese su Nombre de Usuariol">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="contrasena"id="exampleInputPassword1" placeholder="Ingrese su Contraseña">
  </div>
<input type="submit"  class="btn btn-warning" value="Login"/>

</form>

  </div>
  <div class="col-md-4"> 
<h3>Cree su Cuenta Gold</h3>

<form  action="<?=base_url()?>index.php/controladorlogin/recibirdatos" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nombre"placeholder="Ingese su nombre">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Apellido</label>
    <input type="text" class="form-control" name="apellido"id="exampleInputPassword1" placeholder="Ingrese su apellido">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Correo</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="correo"placeholder="Ingrese su correo">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" name="contrasena"id="exampleInputPassword1" placeholder=" Ingrese su Clace">
  </div>
  
  
 

  <!-- Indicates a dangerous or potentially negative action -->
<input type="submit" class="btn btn-warning" value="Crear Usuario"/>
</form>

  </div>
  
  <div class="col-md-4">
    <p><h3>login con facebook</h3></p>

<br>
<br>
<br>
      <? $this->load->view('loginFace')
      ?>s

  </div>
</div>

<br>
<br>
<br>


<? $this->load->view('footer')?>
	