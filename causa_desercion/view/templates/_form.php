<center>
  <form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">
    <fieldset id="form">

      <!--Formulaario de registro -->  
      <div>
        <legend>FORMULARIO DE REGISTRO DE UN NUEVO CENTRO</legend> 
       
        <ol>
          </br>
          <!--input de cod-->  
          <div>
            <div class="">
              <label for="txtCod">Codigo De Centro:</label>
            </div>
            <div>
              <input onKeypress="if (event.keyCode < 48 || event.keyCode > 57)
                    event.returnValue = false;" type="text" value="<?php echo ((isset($txtCod)) ? $txtCod : '') ?>" id="txtCod" name="txtCod" class="campo" placeholder="Insert Cod" required min="10" max="15">
            </div>
          </div>
          <!--input de desc-->  
          <div>
            <div class="">
              <label for="txtDesc">Descripcion De Causa:</label>
            </div>
            <div>
              <input onkeypress="return validar(event)" type="text" value="<?php echo ((isset($txtDesc)) ? $txtDesc : '') ?>" id="txtDesc" name="txtDesc" class="campo" placeholder="Insert desc" required min="10" max="25">
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
