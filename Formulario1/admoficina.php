<?php

session_start();

if(!isset($_SESSION['nomes'])){
  $_SESSION['nomes'] = [];

}elseif(isset($_POST['nome'])){
  $_SESSION['nomes'][] = $_POST['nome'];
  header('Location: admoficina.php');
}

if(!isset($_SESSION['telefones'])){
  $_SESSION['telefones'] = [];

}elseif(isset($_POST['telefone'])){
  $_SESSION['telefones'][] = $_POST['telefone'];
  header('Location: admoficina.php');
}
if(!isset($_SESSION['emails'])){
  $_SESSION['emails'] = [];

}elseif(isset($_POST['email'])){
  $_SESSION['emails'][] = $_POST['email'];
  header('Location: admoficina.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['clear'])){
  session_destroy();
  header('Location: admoficina.php');
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['idx'])){
  $idx_remover = (int)$_POST['idx'];

  if(isset($_SESSION['nomes'][$idx_remover])){
    unset($_SESSION['nomes'][$idx_remover]);
  }elseif(isset($_SESSION['telefones'][$idx_remover])){
    unset($_SESSION['telefones'][$idx_remover]);
    
  }





}



    
?>

<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
         <?php
         include 'navbar.php'
         ?>
    
         
            
    <div class ="row center">
      <?php
        foreach($_SESSION['nomes'] as $nome){
          $idx = array_search($nome, $_SESSION['nomes']); 
          foreach($_SESSION['telefones'] as $telefone){
            $idx = array_search($telefone, $_SESSION['telefones']);
            foreach($_SESSION['emails'] as $email){
              $idx = array_search($email, $_SESSION['emails']);
              echo 
              
              
              "<div class='col s3  offset-s2 card'>
              <div class ='card teal #84ffff cyan accent-1'>
              <div class='card-content center'>
              <h6 class='Center'>Resultado Oficina</h6><br>
              <h7 class= 'center'>Vagas:16</h7><br>
                <h7 class= 'center'>Vagas Disponiveis:16</h7><br>
              Nome: $nome<br>
              Telefone: $telefone<br>
              E-mail: $email<br>
              <span class='black-text'>
              </div>
              </div>
              </div>
              
              ";   
              
            }
          }
        }
        ?>
        </div>
        
              <center>
                  <div class="button "> 

                  <form action="admoficina.php" method="post">
                    <button class="btn waves-effect col s12 m3"input name="idx" type="submit" name="action">delete
                    <i class="material-icons right">delete</i>
                  
                    
                      <button class="btn waves-effect" name="clear" type="submit" name="action">clear all
                        <i class="material-icons right">clear_all</i>
                      </div>
                    
                  </form>
              </center>


        </span>
      </div>
    </div>
  </div>
  


          
          


          
    

          
           
         
          
        </form>
      </div>
    </div>
    
    
    
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/script2.js"></script>
  </body>
</html>