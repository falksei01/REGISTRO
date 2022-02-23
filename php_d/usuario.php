<!doctype html>
<html>
<head>
  <title>REGISTRO</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body background="images/fondo.jpg">

  <div class="container">
    <div class="row">
    <div class="col-xl-1"  style="background-color:#">  
    </div>
      <div class="col-xl-10"  style="background-color:#031222">
       <h1 align="center" style="color:#F7FAFA;"><img src="images/pasa.png">REGISTRO DE USUARIO</h1>
      </div>
      <div class="col-xl-1"  style="background-color:#">  
    </div>
    </div>
    <div class="row">
      <div class="col-lg-1"  style="background-color:#">
      </div>
      <div class="col-lg-4"  style="background-color:#5B5D5D">
        
        <h1 align="center" >
        <img src="images/usuario.png">     
      </div>
      <div class="col-lg-6"  style="background-color:#5B5D5D">  
      <div class="form-group">
      </br>
      <label for="codigo">
      <h5 class="font-weight-bold" style="color:#FFF">Codigo de usuario</h5>
   
      </label>
      <input type="codigo"  
       id="codigo" name="codigo" value="<?php echo $_POST['codigo'];?>"   required>
  
      <div class="valid-feedback">Valid.</div>
      </p>
      
      <div class="form-group">
      </br>
      <label for="num">
      <h5 class="font-weight-bold" style="color:#FFF">Numero de usuario</h5>
   
      </label>
      <input type="num"  
       id="num" name="num" value="<?php echo $_POST['num'];?>"   required>
  
  
      <div class="valid-feedback">Valid.</div>
      </p>
      
      <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Tipo de usuario</span>
    </div>
 <input type="text" class="form-control" value="Administrador" for="Administrador">
  </div>
         
          </p>
          
    
        <div class="container">
          <div class="row">
            <div class="col-lg-3"  style="background-color:#5B5D5D">   
             
                <label for="contraseña">
              
              <h5 class="font-weight-bold" style="color:#FFF">Contraseña:</h5>
             
                </label>
             </div>
            <div class="col-lg-7"  style="background-color:#5B5D5D">
                <input type="password" class="form-control" value="<?php echo $_POST['contraseña'];?>" id="contraseña" name="contraseña" required>
              </div>
            </div>
        </div>
  <div class="col-lg-3"  style="background-color:#5B5D5D">
  </div>
</div>

<div class="container">
<div class="row">
<div class="col-lg-3"  style="background-color:#5B5D5D">
   

<label for="confirmar">

<h5 class="font-weight-bold" style="color:#FFF">Confirma contraseña:</h5>

</label>
</div>
<div class="col-lg-7"  style="background-color:#5B5D5D">
  
  <input type="password" class="form-control" value="<?php echo $_POST['confirmar'];?>" id="confirmar" name="confirmar" required>
</div>
</div>
</div> 
</div>
<div class="col-lg-2"  style="background-color:#5B5D5D">
</div>
</div>
    
    <div class="container">
    <div class="row">
      <div class="col-md-1"  style="background-color:#">
      </div>
      <div class="col-md-10"  style="background-color:#5B5D5D">
         <label for="Nombre">
       
        <h5 class="font-weight-bold" style="color:#FFF">Nombre:</h5>
       
    </label>
    <input type="text"  value="<?php echo $_POST['nombre'];?>" class="form-control" id="nombre" name="nombre" required>
      
        <div class="valid-feedback">Valid.</a></div>
     <div class="text-primary">Por favor rellene este campo..</div>
    
   <label for="Apellidos">
       
        <h5 class="font-weight-bold" style="color:#FFF">Apellidos:</h5>
       
    </label>
    <input type="text"  value="<?php echo $_POST['Apellidos'];?>" class="form-control" id="Apellidos" name="Apellidos" required>
      
         
        <div class="valid-feedback">Valid.</a></div>
     <div class="text-primary">Por favor rellene este campo..</div>
    
   
  </div>
  </div>
  </div>
   <div class="col-md-1"  style="background-color:#">
   </div>
   </div>
   </div>
   
   </div>
   </div>
<div class="container">
    <div class="row">
      <div class="col-sm-1"  style="background-color:#">
        
      </div>
      <div class="col-sm-4"  style="background-color:#5B5D5D">
       
       <label for="tipo">
       <h5 class="font-weight-bold" style="color:#FFF">Tipo de Documento:</h5>
        <div class="form-group">
          <select class="form-control"  value="<?php echo $_POST['tipo'];?>" id="tipo">
            <option>DNI</option>
            <option>VISA</option>
            <option>INE</option>
            <option>PASAPORTE</option>
          </select>
        </div>
        
      </div>
   
    
      <div class="col-sm-6"  style="background-color:#5B5D5D">
      
      <label for="usuario">
      
      <h5 class="font-weight-bold" style="color:#FFF">Numero de Documento</h5>
    </label>
    <input type="text" value="<?php echo $_POST['documento'];?>" class="form-control" id="documento" name="documento" required>
      <div class="valid-feedback">Valid.</div>
      </div>
      <div class="col-sm-1"  style="background-color:#">
    </div>
    </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
   
     <div class="col-sm-1"  style="background-color:#">
      </div>
     
     <div class="col-sm-10"  style="background-color:#5B5D5D">
    <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Sexo</span>
    </div>
    <input type="text" class="form-control" value="Hombre" for="Mujer">
 
      </div>
     
    
      <div class="col-sm-1"  style="background-color:#">
       </div>
    </div>
    </div>
    
    <div class="row">
    <div class="col-sm-1"  style="background-color:#">
      
      </div>
      <div class="col-xl-10"  style="background-color:#5B5D5D">
     
        <label for="correo">
       
        <h5 class="font-weight-bold" style="color:#FFF">Correo Electronico:</h5>
       
    </label>
    <input type="text"  value="<?php echo $_POST['correo'];?>" class="form-control" id="correo" name="correo" required>
      
        <div class="valid-feedback">Valid.</a></div>
     <div class="text-primary">Por favor rellene este campo..</div>
    
     <label for="telefono">
    
     <h5 class="font-weight-bold" style="color:#FFF">Tel:</h5>
         </label>
    <input type="text"  value="<?php echo $_POST['telefono'];?>" class="form-control" id="telefono" name="telefono" required>
    
     <div class="valid-feedback">Valid.</div>
    <div class="text-primary">Por favor rellene este campo..</div>
    </div>  
    <div class="col-sm-1"  style="background-color:#">
    
</div>
    </div>
    </div>
</div>
<div class="container">
    <div class="row">
  <div class="col-sm-1"  style="background-color:#">
    
    
    </div>
      <div class="col-xl-10"  style="background-color:#5B5D5D">
        <div class="row">    
          <div class="col-xl-4"  style="background-color:#5B5D5D">
            
           
            <input type="submit" class="btn btn-primary btn-block" value="Registrar">
          </div>
          <div class="col-xl-4"  style="background-color:#5B5D5D">
          
            <input type="submit" class="btn btn-primary btn-block" value="Limpiar">
           </div>
          <div class="col-xl-4"  style="background-color:#5B5D5D">
            <input type="submit" class="btn btn-primary btn-block" value="Cancerlar">
          </div>
          <br>
          </br> 
          <br></br>     
        </div>
      </div>
 </div>
 <div class="col-sm-1"  style="background-color:#"> 
      </div>

    <div class="row">
<div class="col-sm-1"  style="background-color:#">

</div>
<div class="col-sm-10"  style="background-color:#000203">
</div>

<div class="col-sm-1"  style="background-color:#">
</div>
</div>
</body>
</html>
