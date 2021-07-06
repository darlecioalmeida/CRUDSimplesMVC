</main>

    <footer class="container text-center">
      <p> Copyright &copy; <?php echo date('Y')." ".APP_EMPRESA ?> </p>
    </footer>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <?php 
    /*
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
    */
    ?>
    <script src="<?php echo BASE_URL.'public/js/jquery.min.js'?>" ></script>
    <script src="<?php echo BASE_URL.'public/js/popper.min.js'?>" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous" ></script>
    <script src="<?php echo BASE_URL.'public/css/bootstrap-4.6.0/js/bootstrap.min.js'?>"></script>
    <?php 

        //ADICIONA OS SCRIPTS INFOMADO PELA FUNCAO setJs();
        if(isset($_layoutParametros['js']) && count($_layoutParametros['js'])){

          for ($i=0; $i < count($_layoutParametros['js']); $i++) { 

            echo '<script src="'.$_layoutParametros['js'][$i].'"></script>';
       
         }

        }
        ?>
    
  </body>
</html>