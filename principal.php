<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />

    <title>Blog do Felipe</title>
  </head>
  <body>
    <script>
      var senha = 987;
    </script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Blog do Felipe</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="./index.html"
              >Inicio <span class="sr-only"></span
            ></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./login.html">Login</a>
          </li>
        </ul>
      </div>
    </nav>
    <main class="container">
      <p class="h1 mt-5 text-center">Minhas postagens</p>
      <a class="btn btn-primary" href="./blog/incluirPostagem.php"
        >Criar nova postagem</a
      >
      <div class="container mt-5">
        <div class="row">
            <?php
                        include_once("../servico/Bd.php");       
                        $bd = new Bd();
                        $sql = "select * from blog";
                        foreach ($bd->query($sql) as $row) {
                          echo '<div class="col-sm-4">';
                          echo '<div class="card" style="width: 18rem">';
                          echo '<div class="card-body">';
                          echo '<h5 class="card-title">' .$row["titulo"] . '</h5>';
                          echo '<p class="card-text"> ' .$row["corpo"] . '</p>';
                          echo "<a class='btn btn-primary' href='/blog/alterarPostagem.php?id=".$row['id'] . "'>Alterar</a>";
                          echo '<a href="#" class="btn btn-danger ml-3" onclick=Pergunta('.$row['id'].')>Excluir</a>';
                          echo '</div>';
                          echo '</div>';
                          echo '</div>';
                        }
                    
                    ?>
            
          </div>
        </div>
      </div>
    </main>
    <!-- Optional JavaScript; choose one of the two! -->
    <script>
            
            function Pergunta(id){
                if (confirm("Deseja excluir ?")) {
                 window.location.replace("https://trabalho-felipe.000webhostapp.com/blog/excluirPostagem.php?id="+id);
                }
            }
                
            </script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
