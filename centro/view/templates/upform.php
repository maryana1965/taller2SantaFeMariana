<!-- Formulario de registro de aprendices-->
<center>
  <form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">

    <!--Formulaario de registro -->
    <div>
      
      <!--input de cod-->
      <div>
        <div class="">
          <label for="txtCod">Codigo De centro:</label>
        </div>
        <div>
          <input onKeypress="if (event.keyCode < 48 || event.keyCode > 57)
            event.returnValue = false;" type="text" value="<?php echo ((isset($txtCod)) ? $txtCod : '') ?>" id="txtCod" name="txtCod" class="campo" placeholder="Insert COD" readonly="txtCod" required min="10" max="15">
        </div>
      </div>
      <!--input de desc-->
      <div>
        <div class="">
          <label for="txtDesc">Nombre De Centro:</label>
        </div>
        <div>
          <input onkeypress="return validar(event)" type="text" value="<?php echo ((isset($txtDesc )) ? $txtDesc : '') ?>" id="txtDesc" name="txtDesc" class="campo" placeholder="Insert NAME CENTRO" required min="10" max="25">
        </div>
      </div>
       <!--input de dIR-->
      <div>
        <div class="">
          <label for="txtDesc">Direccion Del Centro:</label>
        </div>
        <div>
          <input  type="text" value="<?php echo ((isset($txtDir)) ? $txtDir : '') ?>" id="txtDir" name="txtDir" class="campo" placeholder="Insert DIR CENTRO" required min="10" max="25">
        </div>
      </div>
      
      <!--input de Telefono-->
      <div>
        <div class="floatLeft">
          <label for="txtTelefono">Telefono:</label>
        </div>
        <div>
          <input onKeypress="if (event.keyCode < 48 || event.keyCode > 57)
                event.returnValue = false;" type="text" value="<?php echo ((isset($txtTelenofo)) ? $txtTelefono : '') ?>" id="txtTelefono" name="txtTelefono" class="campo" placeholder="Insert Phone Number" required min="7" max="20">
        </div>
      </div>
      <!--select de Ciudad-->
      <div>
        <label>Ciudad:</label></br>
        <select name="idCiudad" required>
          <option><?php echo $args['idCiudad'] ?></option>
          <?php foreach ($ciudad as $dato): ?>
          <option value="<?php echo $dato['cod_ciudad'] ?>" <?php echo ($dato['cod_ciudad'] == 1)?> ><?php echo $dato['nom_ciudad'] ?></option>
          <?php endforeach ?>
        </select>
      </div>
      </br>
     
    </div>
    <button type="submit" class="boton_enviar">Actualizar</button>

    <div id="backform">
      <nav>
        <div class="backbutton">
          <li><a href="index.php">REGISTRADOS</a></li>
        </div>
      </nav>
    </div>
  </form>
</center>