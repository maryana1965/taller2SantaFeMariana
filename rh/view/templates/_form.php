<center>
  <form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">
    <fieldset id="form">

      <!--Formulaario de registro -->  
      <div>
        <legend>FORMULARIO DE REGISTRO DE UN NUEVO RH</legend> 

        <!--input de cod_rh-->  
        <div>
          <div class="">
            <label for="txtCod">Codigo De RH:</label>
          </div>
          <div>
            <input onKeypress="if (event.keyCode < 48 || event.keyCode > 57)
                  event.returnValue = false;" type="text" value="<?php echo ((isset($txtCod)) ? $txtCod : '') ?>" id="txtCod" name="txtCod" class="campo" placeholder="Insert COD" required min="10" max="15">
          </div>
        </div>
        <!--input de desc_rh-->  
        <div>
          <div class="">
            <label for="txtDesc">Descripcion De Rh:</label>
          </div>
          <div>
            <input onkeypress="return validar(event)" type="text" value="<?php echo ((isset($txtDesc)) ? $txtDesc : '') ?>" id="txtDesc" name="txtDesc" class="campo" placeholder="Insert NAME CENTRO" required min="10" max="25">
          </div>
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
