<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> -->
    <link rel="stylesheet" href="<?php echo BASE_URL.'public/css/bootstrap-4.6.0/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?php echo BASE_URL.'public/css/bootstrap-icons/bootstrap-icons.css'?>">
    <link rel="stylesheet" href="<?php echo  $_layoutParametros['rota_css'].'estilos.css'; ?> ">
    <?php 
    //ADICIONA OS ESTILOS INFOMADO PELA FUNCAO setCss();
    if(isset($_layoutParametros['css']) && count($_layoutParametros['css'])){

      for ($i=0; $i < count($_layoutParametros['css']); $i++) { 
    echo '<link rel="stylesheet" href="'.$_layoutParametros['css'][$i].'">';

    }

    }
?>
  
    <title><?php if(isset($this->titulo)) echo $this->titulo; ?></title>
  </head>
  <body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#"><?php if(APP_NAME) echo APP_NAME; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarDefault">
        <ul class="navbar-nav mr-auto">
        <?php 

        if(isset($_layoutParametros['menu'])){

        foreach ($_layoutParametros['menu'] as $key => $mnitem ) {
            //VERIFICA SE A PAGINA ATIVA

            if($item && $_layoutParametros['menu'][$key]['id']==$item){
                $_item_style = 'active';
            } else {
                $_item_style = '';
            }

            echo '<li class="nav-item '.$_item_style.'" id="'.$mnitem['id'].'" style="'.$mnitem['style'].'"><span class="'.$mnitem['icon'].'"></span><a class="nav-link" href="'.$mnitem['url'].'">'.$mnitem['titulo'].'</a></li>';
        }

        }
        ?>
        <form class="form-inline my-2 my-lg-0 ml-5">
          <input class="form-control mr-sm-2" type="text" placeholder="Pesquisa" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
        </ul>
        <?php

          if(Session::get('autenticado')){

            echo '<span class="btn btn-outline-warning ml-3 my-0 my-sm-0">Olá, '.strtoupper(Session::get('usuario')).'</span>';

            echo '<a href="'.BASE_URL."login/encerrar".'" class="btn btn-outline-danger ml-3  my-0 my-sm-0" type="submit">Encerrar Sessão</a>';

          } else {
            echo '<a href="'.BASE_URL."login".'" class="btn btn-success ml-3  my-0 my-sm-0" type="submit">Iniciar Sessão</a>';
            echo '<a href="'.BASE_URL."registro".'" class="btn btn-danger ml-3  my-0 my-sm-0" type="submit">Registrar-se</a>';
          }

        ?>
      </div>
    </nav>

   <main role="main">
   
   <?php if (isset($this->mensagem)) : ?>
    <div class="container mt-4" style="display: block;">
   <div class="alert alert-success" role="alert" id="msgsucesso"><?php  echo $this->mensagem; ?></div>
   </div>
   <?php endif; ?>

   <?php if (isset($this->_error)) : ?>
    <div class="container mt-4" style="display: block;">
   <div class="alert alert-danger" role="alert" id="msgerror"><?php echo $this->_error; ?></div>
   </div>
   <?php endif; ?>