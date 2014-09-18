<center>
  <form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">
    <fieldset id="form">

      <!--Formulaario de registro -->  
      <div>
        <legend>FORMULARIO DE REGISTRO DE UN NUEVO CENTRO</legend> 
        
          <!--input de cod_centro-->  
          <div>
            <div class="">
              <label for="txtId">Codigo Del Centro:</label>
            </div>
            <div>
              <input onKeypress="if (event.keyCode < 48 || event.keyCode > 57)
                    event.returnValue = false;" type="text" value="<?php echo ((isset($txtCod)) ? $txtCod : '') ?>" id="txtCod" name="txtCod" class="campo" placeholder="Insert COD" required min="10" max="15">
            </div>
          </div>
          <!--input de desc_centro-->  
          <div>
            <div class="">
              <label for="txtDesc">Nombre Del Centro:</label>
            </div>
            <div>
              <input onkeypress="return validar(event)" type="text" value="<?php echo ((isset($txtDesc)) ? $txtDesc : '') ?>" id="txtDesc" name="txtDesc" class="campo" placeholder="Insert NAME CENTRO" required min="10" max="25">
            </div>
          </div>
          <!--input de telefono-->  
          <div>
            <div class="floatLeft">
              <label for="txtTelefono">Telefono Del Centro:</label>
            </div>
            <div>
              <input onKeypress="if (event.keyCode < 48 || event.keyCode > 57)
                    event.returnValue = false;" type="text" value="<?php echo ((isset($txtTelefono)) ? $txtTelefono : '') ?>" id="txtTelefono" name="txtTelefono" class="campo" placeholder="Insert Telefono" required min="10" max="25">
            </div>
          </div>
          </br>
          <!--input de dir--> 
          <div>
            <div class="">
              <label for="txtDir">Direccion Del Centro:</label>
            </div>
            <div>
              <input  type="text" value="<?php echo ((isset($txtDir)) ? $txtDir : '') ?>" id="txtDir" name="txtDir" class="campo" placeholder="Insert Dir" required min="2" max="3">
            </div>
          </div>
          <!--select de Ciudad-->  
          <div>
            <label>Ciudad Del Centro:</label></br>  
            <select name="idCiudad">
              <option>-Seleccionar-</option>
              <?php foreach ($ciudad as $dato): ?>
                <option value="<?php echo $dato['cod_ciudad'] ?>" <?php echo ($dato['cod_ciudad'] == 1) ? 'selected' : '' ?> ><?php echo $dato['nom_ciudad'] ?></option>
              <?php endforeach ?>              
            </select>  
          </div>
          
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
