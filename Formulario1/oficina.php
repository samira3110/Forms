<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/style1.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>

        <?php
         include 'navbar.php'
         ?>
      
          <div class="container"> 
            
            <div class id="box bx1">
              <form  action= "admoficina.php"  method="post" class="col s6">
                <div class="row">
                <h1 class="center">Cadastro de Oficina</h1>
                <h6 class= "center">Vagas:16</h6>
                <h6 class= "center">Vagas Disponiveis:16</h6>
                <div class="input-field col s12">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="icon_prefix" type="text" name=nome class="validate">
                  <label for="icon_prefix">Nome</label>
                </div>
                </div>
                
                <div class="input-field col s12">
                  <i class="material-icons prefix">phone</i>
                  <input id="icon_telephone" type="tel" name=telefone class="validate">
                  <label for="icon_telephone">Telefone</label>
                </div>
                
                <div class="input-field col s12">
                  <i class="material-icons prefix">email</i>
                  <input id="icon_email" type="email" name=email class="validate">
              <label for="icon_email">E-mail</label>
              <center>
                <button class="btn waves-effect pulse" type="submit" name="action">Enviar
                <i class="material-icons right">send</i>
              </button>
              </div>
            </center>
            </div>
          </div>
          

          
    

          
           
         
          
        </form>
      </div>
    </div>
    
    
    
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/script1.js"></script>
  </body>
</html>
      