<?php

session_start();

if(!isset($_SESSION['nomes'])){
  $_SESSION['nomes'] = [];

}elseif(isset($_POST['nome'])){
  $_SESSION['nomes'][] = $_POST['nome'];
  header('Location: adminte.php');
}

if(!isset($_SESSION['telefones'])){
  $_SESSION['telefones'] = [];

}elseif(isset($_POST['telefone'])){
  $_SESSION['telefones'][] = $_POST['telefone'];
  header('Location: adminte.php');
}
if(!isset($_SESSION['emails'])){
  $_SESSION['emails'] = [];

}elseif(isset($_POST['email'])){
  $_SESSION['emails'][] = $_POST['email'];
  header('Location: adminte.php');
}

if(!isset($_SESSION['tecnicos'])){
  $_SESSION['tecnicos'] = [];

}elseif(isset($_POST['tecnico'])){
  $_SESSION['tecnicos'][] = $_POST['tecnico'];
  header('Location: adminte.php');
}

if(!isset($_SESSION['livres'])){
  $_SESSION['livres'] = [];

}elseif(isset($_POST['livre'])){
  $_SESSION['livres'][] = $_POST['livre'];
  header('Location: adminte.php');
}





if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['clear'])){
  session_destroy();
  header('Location: adminte.php');
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['idx'])){
  $idx_remover = (int)$_POST['idx'];
  header('Location: adminte.php');

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
    <link rel="stylesheet" href="css/style3.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
<body>

<nav>
    <div class="nav-wrapper #b2ebf2 cyan lighten-4">
      <a href="#" class="brand-logo"></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="oficina.php">Oficina</a></li>
        <li><a href="index.php">Formulário</a></li>
        <li><a href="admoficina.php">Resultado oficina</a></li>
        <li><a href="adminte.php">Resultado formulário</a></li>
      </ul>
    </div>
  </nav> 
  <div class="row center">
  <?php
        foreach($_SESSION['nomes'] as $nome){
          $idx = array_search($nome, $_SESSION['nomes']); 
          foreach($_SESSION['telefones'] as $telefone){
            $idx = array_search($telefone, $_SESSION['telefones']);
            foreach($_SESSION['emails'] as $email){
              $idx = array_search($email, $_SESSION['emails']);
              foreach($_SESSION['tecnicos'] as $tecnico){
                $idx = array_search($tecnico, $_SESSION['tecnicos']);
                foreach($_SESSION['livres'] as $livre){
                  $idx = array_search($livre, $_SESSION['livres']);
          echo          
                                             
                    "<div class='col s3  offset-s2 card'>
                      <div class ='card teal #84ffff cyan accent-1  '>
                        <div class='card-content center'>
                          <h6 class='Center'>Resultado Formulário</h6><br>
                          Nome: $nome<br>
                          Telefone: $telefone<br>
                          E-mail: $email<br>
                          Curso Técnico: $tecnico<br>
                          Curso livre: $livre<br>

                          <span class='black-text'>
                        </div>
                      </div>
                    </div>
                    
                ";
              
  
          }
         }
        }
      }
    }
        ?>
        </div>
              <center>
                  <div class="button col s6"> 

                  <form action="adminte.php" method="post">
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
  




  
    </body>
</html>