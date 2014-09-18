<!-- Formulario de registro de aprendices-->
<center>
  <form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">

    <!--Formulaario de registro -->
    <div>

      <!--input de cod-->
      <div>
        <div class="">
          <label for="txtCod">Codigo Del Departamenro:</label>
        </div>
        <div>
          <input onKeypress="if (event.keyCode < 48 || event.keyCode > 57)
                event.returnValue = false;" type="text" value="<?php echo ((isset($txtCod)) ? $txtCod : '') ?>" id="txtCod" name="txtCod" class="campo" placeholder="Insert COD" readonly="txtCod" required min="10" max="15">
        </div>
      </div>
      <!--input de nombre-->
      <div>
        <div class="">
          <label for="txtNom">Nombre Del Departamento:</label>
        </div>
        <div>
          <input onkeypress="return validar(event)" type="text" value="<?php echo ((isset($txtNom)) ? $txtNom : '') ?>" id="txtNom" name="txtNom" class="campo" placeholder="Insert Name" required min="10" max="25">
        </div>
      </div>  
    </div>
    </br>
    </div>
    <button type="submit" class="boton_enviar">Actualizar</button>

    <div id="backform">
      <nav>
        <div class="backbutton">
          <li><a href="index.php">Registrados</a></li>
        </div>
      </nav>
    </div>
  </form>
</center>