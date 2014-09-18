<center>
  <form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">
    <fieldset id="form">

      <!--Formulaario de registro -->  
      <div>
        <legend>FORMULARIO DE REGISTRO DE UN NUEVO APRENDIZ</legend> 
        <!--select de Tipo Id-->
        <ol>
          <div>
            <label>Tipo de Identificacion:</label></br>  
            <select name="idTipoId" required="value">
              <option>-Seleccionar-</option>
              <?php foreach ($TID as $dato): ?>
                <option value="<?php echo $dato['cod_tip_id'] ?>" <?php echo ($dato['cod_tip_id'] == 1) ? 'selected' : '' ?> ><?php echo $dato['desc_tip_id'] ?></option>
              <?php endforeach ?>
            </select>         
          </div>

          </br>
          <!--input de id-->  
          <div>
            <div class="">
              <label for="txtId">Numero de Identificacion:</label>
            </div>
            <div>
              <input onKeypress="if (event.keyCode < 48 || event.keyCode > 57)
                    event.returnValue = false;" type="text" value="<?php echo ((isset($txtId)) ? $txtId : '') ?>" id="txtId" name="txtId" class="campo" placeholder="Insert ID" required min="10" max="15">
            </div>
          </div>
          <!--input de nombre-->  
          <div>
            <div class="">
              <label for="txtNombre">Nombre:</label>
            </div>
            <div>
              <input onkeypress="return validar(event)" type="text" value="<?php echo ((isset($txtNombre)) ? $txtNombre : '') ?>" id="txtNombre" name="txtNombre" class="campo" placeholder="Insert Name" required min="10" max="25">
            </div>
          </div>
          <!--input de apellido-->  
          <div>
            <div class="floatLeft">
              <label for="txtApellido">Apellido:</label>
            </div>
            <div>
              <input onkeypress="return validar(event)" type="text" value="<?php echo ((isset($txtApellido)) ? $txtApellido : '') ?>" id="txtApellido" name="txtApellido" class="campo" placeholder="Insert LastName" required min="10" max="25">
            </div>
          </div>
          <!--select de Genero-->  
          <div>
            <label>Genero:</label></br>  
            <select name="txtGenero">
              <option>-Seleccionar-</option>
              <option value="F">Femenino</option>
              <option value="M">Masculino</option>              
            </select>  
          </div>
          </br>
          <!--input de Edad--> 
          <div>
            <div class="">
              <label for="txtEdad">Edad:</label>
            </div>
            <div>
              <input onKeypress="if (event.keyCode < 48 || event.keyCode > 57)
                    event.returnValue = false;" type="text" value="<?php echo ((isset($txtEdad)) ? $txtEdad : '') ?>" id="txtEdad" name="txtEdad" class="campo" placeholder="Insert Age" required min="2" max="3">
            </div>
          </div>
          <!--input de Telefono-->  
          <div>
            <div class="floatLeft">
              <label for="txtTel">Telefono:</label>
            </div>
            <div>
              <input onKeypress="if (event.keyCode < 48 || event.keyCode > 57)
                    event.returnValue = false;" type="text" value="<?php echo ((isset($txtTel)) ? $txtTel : '') ?>" id="txtTel" name="txtTel" class="campo" placeholder="Insert Phone Number" required min="7" max="20">
            </div>
          </div>
          <!--select de Ciudad-->  
          <div>
            <label>Ciudad:</label></br>  
            <select name="idCiudad">
              <option>-Seleccionar-</option>
              <?php foreach ($ciudad as $dato): ?>
                <option value="<?php echo $dato['cod_ciudad'] ?>" <?php echo ($dato['cod_ciudad'] == 1) ? 'selected' : '' ?> ><?php echo $dato['nom_ciudad'] ?></option>
              <?php endforeach ?>              
            </select>  
          </div>
          </br> 
          <!--select de RH-->
          <div>
            <label>Rh:</label></br>  
            <select name="idRh">
              <option>-Seleccionar-</option>
              <?php foreach ($rh as $dato): ?>
                <option value="<?php echo $dato['cod_rh'] ?>" <?php echo ($dato['cod_rh'] == 1) ? 'selected' : '' ?> ><?php echo $dato['desc_rh'] ?></option>
              <?php endforeach ?>
            </select>         
          </div>
        </ol>
        </br>
      </div>

      <button type="submit" id="boton_enviar">Registrar</button>
      <div id="backform">
        <nav> 
          <ul class="menu">
            <li><a href="index.php">Registrados</a></li>
          </ul>
        </nav>  
      </div>
    </fieldset>
  </form>

</center>
