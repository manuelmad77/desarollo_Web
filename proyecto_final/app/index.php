<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="robots" content="index,follow">
    
    <!--LETRAS--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">

    <!--CSS--->
    <link rel="stylesheet" href="http://localhost/proyecto_final/app/css/desktop.css">

    <!--Swiper-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!--Iconos-->
    <script src="https://kit.fontawesome.com/47d1409bf3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> -->
    <title>Proyecto Final</title>
</head>

<body class="body">
  <!----NAVBAR---->
  <header class="header">
    <nav class="nav fixed-top">
      <div class="navbar__left">
          <a href="index.php">
            <img src="app/img/proyecto_final/logo_usap.PNG" alt="No me cargue" class="nav__logo">
          </a>
          <button class="nav__toggle">
            <i class="fa-solid fa-bars"></i>
          </button>
      </div>
      <div class="navbar__right">
          <ul class="navbar__lista">
              <li class="li-home">
                  <a href="index.php" class="navbar__link">Inicio</a>
              </li>
              <li>
                  <a href="" class="navbar__link">Productos</a>
              </li>
              <li>
                  <a href="" class="navbar__link">Marcas</a>
              </li>
              <li>
                  <a href="" class="navbar__link">Ofertas</a>
              </li>
              <li>
                  <a href="" class="navbar__link">Categorias</a>
              </li>
              <li>
                  <a href="" class="navbar__link" data-bs-toggle="modal" data-bs-target="#exampleModal">Admin</a>
              </li>
              <li>
                  <a href="?modulo=carrito" class="navbar__link"><i class="fa-solid fa-cart-shopping"></i></a>
              </li>
          </ul>
      </div>
    </nav>
  </header>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Módulos</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Administración de productos</button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <a href="?modulo=admin_productos">
                    <button type="button" class="btn btn-secondary $blue-100">Productos</button>
                  </a>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Administración de categorías</button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <a href="?modulo=admin_categorias">
                    <button type="button" class="btn btn-secondary $blue-100">Categorías</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

   

  <div class="manuel_madrid">
    <?php $funciones->modulo($modulo); ?>
  </div>

  <!--::::Pie de Pagina::::::-->
  <footer class="pie-pagina">
    <div class="grupo-1">
      
    </div>
    <div class="grupo-2">
      <small>&copy; 2022 <b>MANUEL MADRID</b> - All rights reserved.</small>
    </div>
  </footer>

  <script src="app/js/app.js"></script>
  <script src="app/js/index.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>