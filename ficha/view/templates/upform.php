<!-- Formulario de registro de aprendices-->
<center>
  <form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">

    <!--Formulaario de registro -->
    <div>
      <!--input de num_ficha-->
      <div>
        <div class="">
          <label for="txtNum">Numero De Ficha:</label>
        </div>
        <div>
          <input onKeypress="if (event.keyCode < 48 || event.keyCode > 57)
            event.returnValue = false;" type="text" value="<?php echo ((isset($txtNum)) ? $txtNum : '') ?>" id="txtNum" name="txt" class="campo" placeholder="Insert NUM FICHA" readonly="txtNum"required min="10" max="15">
        </div>
      </div>
      <!--input de cod_programa-->
      <div>
        <div class="">
          <label for="txtPrograma">Codigo De Programa:</label>
        </div>
        <div>
          <input onkeypress="return validar(event)" type="text" value="<?php echo ((isset($txtPrograma)) ? $txtPrograma : '') ?>" id="txtPrograma" name="txtPrograma" class="campo" placeholder="Insert COD PROGRAMAA" required min="10" max="25">
        </div>
      </div>
      <!--input de fecha_inicio-->
      <div>
        <div class="floatLeft">
          <label for="txtIni">Fecha De Inicio:</label>
        </div>
        <div>
          <input onkeypress="return validar(event)" type="date" value="<?php echo ((isset($txtIni)) ? $txtIni : '') ?>" id="txtIni" name="txtIni" class="campo" placeholder="Insert FECHA INICIO" required min="10" max="25">
        </div>
      </div>

      </br>
      <!--input de fecha final-->
      <div>
        <div class="">
          <label for="txtFin">Fecha Final:</label>
        </div>
        <div>
          <input onKeypress="if (event.keyCode < 48 || event.keyCode > 57)
            event.returnValue = false;" type="date" value="<?php echo ((isset($txtFin)) ? $txtFin : '') ?>" id="txtFin" name="txtFin" class="campo" placeholder="Insert FECHA FINAL" required min="2" max="3">
        </div>
      </div>
      <!--input de cod_centro-->
      <div>
        <div class="floatLeft">
          <label for="txtCentro">Codigo De Centro:</label>
        </div>
        <div>
          <input onKeypress="if (event.keyCode < 48 || event.keyCode > 57)
                event.returnValue = false;" type="text" value="<?php echo ((isset($txtCentro)) ? $txtCentro : '') ?>" id="txtCentro" name="txtCentro" class="campo" placeholder="Insert COD CENTRO" required min="7" max="20">
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