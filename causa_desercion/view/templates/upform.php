<!-- Formulario de registro de aprendices-->
<center>
  <form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">

    <!--Formulaario de registro 
      <!--input de cod-->
      <div>
        <div class="">
          <label for="txtId">Codigo De Causa:</label>
        </div>
        <div>
          <input onKeypress="if (event.keyCode < 48 || event.keyCode > 57)
            event.returnValue = false;" type="text" value="<?php echo ((isset($txtCod)) ? $txtCod : '') ?>" id="txtCod" name="txtCod" class="campo" placeholder="Insert Cod" readonly="txtCod" required min="10" max="15">
        </div>
      </div>
      <!--input de desc-->
      <div>
        <div class="">
          <label for="txtDesc">Descripcion De Causa :</label>
        </div>
        <div>
          <input onkeypress="return validar(event)" type="text" value="<?php echo ((isset($txtDesc)) ? $txtDesc : '') ?>" id="txtDesc" name="txtDesc" class="campo" placeholder="Insert Desc" required min="10" max="25">
        </div>
      </div>
      <!--input de estado-->
      <div>
        <div class="floatLeft">
          <label for="txtEstado">Estado:</label>
        </div>
        <div>
          <input onkeypress="return validar(event)" type="text" value="<?php echo ((isset($txtEstado)) ? $txtEstado : '') ?>" id="txtEstado" name="txtEstado" class="campo" placeholder="Insert Estado" required min="10" max="25">
        </div>
      </div>
           
      </br>
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