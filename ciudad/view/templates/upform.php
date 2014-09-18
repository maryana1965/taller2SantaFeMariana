<!-- Formulario de registro de aprendices-->
<center>
  <form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">

    <!--Formulaario de registro ciudad -->
    <div>
     <!--input de cod_ciudad-->  
          <div>
            <div class="">
              <label for="txtCod">Codigo De Ciudad:</label>
            </div>
            <div>
              <input onKeypress="if (event.keyCode < 48 || event.keyCode > 57)
                event.returnValue = false;" type="text" value="<?php echo ((isset($txtCod)) ? $txtCod : '') ?>" id="txtCod" name="txtCod" class="campo" placeholder="Insert COD" readonly="txtCod" required min="10" max="15">
            </div>
          </div>
          <!--input de nombre ciudad-->  
          <div>
            <div class="">
              <label for="txtNom">Nombre De La Ciudad:</label>
            </div>
            <div>
              <input onkeypress="return validar(event)" type="text" value="<?php echo ((isset($txtNom)) ? $txtNom : '') ?>" id="txtNom" name="txtNom" class="campo" placeholder="Insert Name" required min="10" max="25">
            </div>
          </div>
          <!--input de cod_depto-->  
          <div>
            <div class="floatLeft">
              <label for="txtCodDepto">Codigo Del Departamento:</label>
            </div>
            <div>
              <input onkeypress="return validar(event)" type="text" value="<?php echo ((isset($txtCodDepto)) ? $txtCodDepto : '') ?>" id="txtCodDepto" name="txtCodDepto" class="campo" placeholder="Insert COD DEPTO" required min="10" max="25">
            </div>
          </div>
          
          </br>
          <!--input de habitantes--> 
          <div>
            <div class="">
              <label for="txtHabitantes">Habitantes:</label>
            </div>
            <div>
              <input onKeypress="if (event.keyCode < 48 || event.keyCode > 57)
                    event.returnValue = false;" type="text" value="<?php echo ((isset($txtHabitantes)) ? $txtEdad : '') ?>" id="txtHabitantes" name="txtHabitantes" class="campo" placeholder="Insert HABITANTES" required min="2" max="3">
            </div>
          </div>
        </ol>
        </br>
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