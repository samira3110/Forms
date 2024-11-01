<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
  
        
         <?php
         include 'navbar.php'
         ?>

   
      
          <div class="container"> 
            </div>
            <div class id="box">
              <form action="adminte.php" class="col s6" method="post">
                  <div class="row">
                  <h1 class="center">Formulário</h1>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" name=nome class="validate">
                    <label for="icon_prefix">Nome</label>
                    
                  </div>
                  
                  
                  <div class="input-field col s12">
                    <i class="material-icons prefix">phone</i>
                    <input id="icon_telephone" type="tel"  name=telefone class="validate">
                    <label for="icon_telephone">Telefone</label>
                  </div>
                  
                  <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="icon_email" type="email"  name=email class="validate">
                <label for="icon_email">E-mail</label>
              </div>
            </div>

            <h5>Curso Tecnico</h5>
            <div class="input-field col s12">
              <select name=tecnico>
                <option value="" >Selecione</option>
                <option value="Tecnico de Informatica para Internet" >Tecnico de Informatica para Internet</option>
                <option value="Tecnico de Informatica">Tecnico de Informatica</option>
                <option value="Tecnico em Computacao Grafica">Tecnico em Computacao Grafica</option>
              </select>
              

            </div>
            
                  <h5>Cursos livres</h5>
                  <div class="input-field col s12">
              <select name=livre>
                <option value="" >Selecione</option>
                <option value="Excel Essencial">Excel Essencial</option>
                <option value="Excel Avancado I ">Excel Avancado I </option>
                <option value="Excel Avancado II">Excel Avancado II</option>
                <option value="Python I Fundamentos">Python I Fundamentos</option>
                <option value="Photoshop">Photoshop</option>
              </select>
                  
                  

                  <center>
                  <button class="btn waves-effect pulse" type="submit" name="action">Enviar
                  <i class="material-icons right">send</i>
                </button>
                </div>
              </center>

            
          
            
        </form>
        </form>
      </div>
    </div>
    
    
    
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
      