<center>
  <form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">
    <fieldset id="form">

      <!--Formulaario de registro -->  
      <div>
        <legend>FORMULARIO DE REGISTRO DE UN NUEVA MATRICULA</legend> 
        
          </br>
          <!--input de numero de ficha-->  
          <div>
            <div class="">
              <label for="txtNum">Numero De Ficha:</label>
            </div>
            <div>
              <input onKeypress="if (event.keyCode < 48 || event.keyCode > 57)
                    event.returnValue = false;" type="text" value="<?php echo ((isset($txtNum)) ? $txtNum : '') ?>" id="txtNum" name="txtNum" class="campo" placeholder="Insert NUM FICHA" required min="10" max="15">
            </div>
          </div>
          <!--input de id-->  
          <div>
            <div class="">
              <label for="txtIdApre">Id Aprendiz:</label>
            </div>
            <div>
              <input type="text" value="<?php echo ((isset($txtIdApre)) ? $txtIdApre : '') ?>" id="txtIdApre" name="txtIdApre" class="campo" placeholder="Insert ID" required min="10" max="25">
            </div>
          </div>
          <!--input de estado-->  
          <div>
            <div class="floatLeft">
              <label for="txtEstado">estado:</label>
            </div>
            <div>
              <input onkeypress="return validar(event)" type="text" value="<?php echo ((isset($txtEstado)) ? $txtEstado : '') ?>" id="txtEstado" name="txtEstado" class="campo" placeholder="Insert ESTADO" required min="10" max="25">
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
