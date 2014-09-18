<center>
  <form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">
    <fieldset id="form">

      <!--Formulaario de registro -->  
      <div>
        <legend>FORMULARIO DE REGISTRO DE UNA NUEVA FICHA</legend> 
        
        <ol>
          </br>
          <!--input de num_ficha-->  
          <div>
            <div class="">
              <label for="txtId">Numero De Ficha:</label>
            </div>
            <div>
              <input onKeypress="if (event.keyCode < 48 || event.keyCode > 57)
                    event.returnValue = false;" type="text" value="<?php echo ((isset($txtNum)) ? $txtNum : '') ?>" id="txtNum" name="txtNum" class="campo" placeholder="Insert NUM" required min="10" max="15">
            </div>
          </div>
          <!--input de cod_pograma-->  
          <div>
            <div class="">
              <label for="txtPrograma">Codigo De Programa:</label>
            </div>
            <div>
              <input type="text" value="<?php echo ((isset($txtPrograma)) ? $txtPrograma : '') ?>" id="txtPrograma" name="txtPrograma" class="campo" placeholder="Insert COD PROGRAMA" required min="10" max="25">
            </div>
          </div>
          <!--input de fecha inicio-->  
          <div>
            <div class="floatLeft">
              <label for="txtIni">Fecha De Inicio:</label>
            </div>
            <div>
              <input type="date" value="<?php echo ((isset($txtIni)) ? $txtIni : '') ?>" id="txtIni" name="txtIni" class="campo" placeholder="Insert FECHA INICIO" required min="10" max="25">
            </div>
          </div>
          <!--input de fecha final--> 
          <div>
            <div class="">
              <label for="txtFin">Fecha Final:</label>
            </div>
            <div>
              <input type="date" value="<?php echo ((isset($txtFin)) ? $txtFin : '') ?>" id="txtFin" name="txtFin" class="campo" placeholder="Insert FECHA FINAL" required min="2" max="3">
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
