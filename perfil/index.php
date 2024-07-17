<?php include_once "menu.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>Perfil</title>
</head>

<body>
  <main class="fundo">
    <div class="container">
      <div class="row pt-5">
        <?php
        include "conexao.php";
        $sqlBusca = "SELECT * FROM t_perfil ORDER BY RAND()";
        $todosPerfil = mysqli_query($conexao, $sqlBusca);
        while ($umPerfil = mysqli_fetch_assoc($todosPerfil)) {
        ?>

          <div class="col-12 col-sm-8 col-md-6 col-lg-3 mt-5">
            <div class="card" style="height:100%">
              <img class="card-img-top" src="<?php echo $umPerfil['fundo']; ?>" alt="Bologna">
              <div class="card-body text-center">
                <img class="avatar rounded-circle" src="img\<?php echo $umPerfil['foto']; ?>"><br>
                <h4 class="card-title"><?php echo $umPerfil['nome'] ?></h4><br>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $umPerfil['profissao']; ?></h6><br>
                <p class="card-text">
                  <?php echo $umPerfil['descricao']; ?></p>
                <p>

                  <?php
                  if ($umPerfil['instagram'] != "") { ?>
                    <a href="<?php echo $umPerfil['instagram']; ?>" class="btn"><i class="bi bi-instagram"></i></a>
                  <?php
                  }
                  ?>

                  <?php
                  if ($umPerfil['twitter'] != "") { ?>
                    <a href="<?php echo $umPerfil['twitter']; ?>" class="btn"><i class="bi bi-twitter"></i></a>
                  <?php
                  }
                  ?>
                  <?php
                  if ($umPerfil['facebook'] != "") { ?>
                    <a href="<?php echo $umPerfil['facebook']; ?>" class="btn"><i class="bi bi-facebook"></i></a>
                  <?php
                  }
                  ?>
                  <?php
                  if ($umPerfil['linkedin'] != "") { ?>
                    <a href="<?php echo $umPerfil['linkedin']; ?>" class="btn"><i class="bi bi-linkedin"></i></a>
                  <?php
                  }
                  ?>
                  <?php
                  if ($umPerfil['youtube'] != "") { ?>
                    <a href="<?php echo $umPerfil['youtube']; ?>" class="btn"><i class="bi bi-youtube"></i></a>
                  <?php
                  }
                  ?>

              </div>
            </div>
          </div>
        <?php
        }
        mysqli_close($conexao);
        ?>
      </div>
    </div>

  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>