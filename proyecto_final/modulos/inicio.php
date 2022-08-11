<!----VARIABLES PHP---->
<?php
global $mysqli;
 ?>

<!----SLIDER---->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">  
    <div class="carousel-item active">
      <img class="bd-placeholder-img" src="app/img/proyecto_final/macbookpro.jpg"> 
      <div class="container">
        <div class="carousel-caption text-start">
          <h1 class="h1">Nuevos modelos</h1>
          <p>Es momento de que inviertas en tu futuro.</p>
          <p><a id="lito" class="btn btn-lg btn-primary" href="#">Macbookpro 2021</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="bd-placeholder-img" src="app/img/proyecto_final/teclado_dell.jpg"> 
      <div class="container">
        <div class="carousel-caption">
          <h1>Another example headline.</h1>
          <p>Some representative placeholder content for the second slide of the carousel.</p>
          <p><a id="lito" class="btn btn-lg btn-primary" href="#">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="bd-placeholder-img" src="app/img/proyecto_final/gaming.png"> 
      <div class="container">
        <div class="carousel-caption text-end">
          <h1>One more for good measure.</h1>
          <p>Some representative placeholder content for the third slide of this carousel.</p>
          <p><a id="lito" class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>    

 
<!----ULTIMOS PRODUCTOS---->
<p class="title__questions">Ultimos productos</P>   
 
<section class="whychooseus">
  <div class = "whychooseus__container">
    <?php 
    $strsql = "SELECT `idproducto`, `nombre_producto`, `idcategoria`, `descripcion`, `precio`, `cantidad`, `url_imagen`, `fecha_creacion` FROM `productos` LIMIT 4";
    
    if($stmt = $mysqli->prepare($strsql)){
      $stmt->execute();
      $stmt->store_result();
      if($stmt->num_rows > 0){
        $stmt->bind_result($idproducto,$nombre_producto,$idcategoria,$descripcion,$precio, $cantidad, $url_imagen, $fecha_creacion);
      
        while($stmt->fetch()){
          ?>
          <a class ="ultimos_productos" href="?modulo=producto_detalles&id_producto=<?php echo $idproducto?>">
            <article class="entrada-blog">
              <img src="<?php echo $url_imagen?>" class="whychooseus__imagen">
              <h2><?php echo $nombre_producto ?></h2>
              <div><?php echo "L" .number_format($precio,2)?></div>
            </article>
          </a>
          <?php
        }
      }else{
        echo "No hay datos para mostrar";
      }
    }else{
      echo "Error al preparar la consulta";
    }
    ?>
  </div>
</section>

<!----MARCAS---->
<section class="contenedor">
  <p class="title_projects">Las mejores marcas<p>
  <div class = "columnas">
    <?php 
    $strsql = "SELECT `idmarca`, `nombre_marca`,`url_imagen` FROM `marcas` LIMIT 2";
    
    if($stmt = $mysqli->prepare($strsql)){
      $stmt->execute();
      $stmt->store_result();
      if($stmt->num_rows > 0){
        $stmt->bind_result($idmarca,$nombre_marca,$url_imagen);
      
        while($stmt->fetch()){
          ?>
           <a class="enlace_marca" href="?modulo=marca_detalles&id_marca=<?php echo $idmarca?>">
           <article class="entrada-blog">
                <h2><?php echo $nombre_marca?></h2>
                <div class="swiper-slide">
                  <img src=<?php echo $url_imagen?> class="imagen_projects">
                </div>
            </article>
            </a>
          <?php
        }
      }else{
        echo "No hay datos para mostrar";
      }
    }else{
      echo "Error al preparar la consulta";
    }
    ?>
  </div>
</section>

<section class="oferta__especial">
  <h3 class="ofertas_lito">Ver ofertas por temporada</h3>
  <div>
    <a href="?modulo=ofertas_productos">
      <img src="app/img/proyecto_final/ofertas_wallpaper.jpg" alt="">
    </a>
  </div>
</section>

<section class="categorias">
  <h3>Compra por categoria</h3>
    <div class="categorias__columnas">
      <a href="?modulo=categoria_equipos">
        <article>
          <img src="app/img/proyecto_final/categoria_laptops.jpg" alt="" class="categorias__imagenes">
        </article>
      </a>
      <a href="?modulo=categoria_celulares">
        <article>
          <img src="app/img/proyecto_final/categoria_celulares.jpg" alt="" class="categorias__imagenes">
        </article>
      </a>
    </div>
</section>


