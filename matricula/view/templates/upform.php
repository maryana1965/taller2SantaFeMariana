<!-- Formulario de registro de aprendices-->
<center>
  <form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">

    <!--Formulaario de registro -->
    <div>
      
      </br>
      <!--input de id-->
      <div>
        <div class="">
          <label for="txtNum">Numero De Ficha:</label>
        </div>
        <div>
          <input onKeypress="if (event.keyCode < 48 || event.keyCode > 57)
            event.returnValue = false;" type="text" value="<?php echo ((isset($txtNum)) ? $txtNum : '') ?>" id="txtNum" name="txtNum" class="campo" placeholder="Insert NUM" readonly="txtNum" required min="10" max="15">
        </div>
      </div>
      <!--input de ID APRE-->
      <div>
        <div class="">
          <label for="txtIdApre"> Id Apre:</label>
        </div>
        <div>
          <input  type="text" value="<?php echo ((isset($txtIdApre)) ? $txtIdApre : '') ?>" id="txtIdApre" name="txtIdApre" class="campo" placeholder="Insert ID" required min="10" max="25">
        </div>
      </div>
      <!--input de ESTADO-->
      <div>
        <div class="floatLeft">
          <label for="txtEstado">Estado:</label>
        </div>
        <div>
          <input onkeypress="return validar(event)" type="text" value="<?php echo ((isset($txtEstado)) ? $txtEstado : '') ?>" id="txtEstado" name="txtEstado" class="campo" placeholder="Insert ESTADO" required min="10" max="25">
        </div>
      </div>
    </div>
    <button type="submit" class="boton_enviar">Actualizar</button>

    <div id="backform">
      <nav>
        <div class="backbutton">
          <li><a href="index.php">Registrados
            </a></li>
        </div>
      </nav>
    </div>
  </form>
</center>