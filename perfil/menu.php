<?php session_start(); ?>


<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Página de Perfil de Perssonagens de Filmes</a>


    <form class="d-flex mt-3" role="search" action="validar.php" method="post">
      <input class="form-control me-2" name="buscar" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success" type="submit">Buscar</button>
    </form>


    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
          
          <?php
          if (isset($_SESSION["usuario"]) && $_SESSION["usuario"] !== "") {
            ?>
            <img  class="rounded-circle" height="60" src="img/<?php echo $_SESSION['fotoPerfilLogado']; ?>">  
            
            <?php
            echo $_SESSION["usuario"]; 
          }else{?>

            <img src="img/perfil.png"
            class="rounded-circle" height="20" alt="Black and White Portrait of a Man" loading="lazy" /> 
            <?php
          }
          ?>
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" href="#">

            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <?php
            if (isset($_SESSION["usuario"]) == "") {
            ?>
              <a class="nav-link" href="login.php">Logar Usuário</a>

            <?php
            }
            ?>
          </li>

          <?php
          if (isset($_SESSION["usuario"]) && $_SESSION["usuario"] !== "") {
          ?>
            <li class="nav-item">
              <a class="nav-link" href="#">Cadastrar Perfil</a>
            </li>
          <?php
          } ?>

          <li class="nav-item">
            <?php
            if (isset($_SESSION["usuario"]) && $_SESSION["usuario"] !== "") {
            ?>
              <a class="nav-link" href="#">Carrinho de Compras</a>
          </li>
        <?php
            } ?>

        </li>
        <li class="nav-item">
          <?php
          if (isset($_SESSION["usuario"]) && $_SESSION["usuario"] !== "") {
          ?>
            <a class="nav-link" href="logout.php">Sair do Usuário</a>
        </li>
      <?php
          } ?>

      </li>
      </div>
    </div>
  </div>
</nav>