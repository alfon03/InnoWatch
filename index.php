<?php require("Components/header.php")?>


<body>
  
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo $url . "/../assets/img/hombreFeliz.webp"?>" class="d-block w-100 img-fluid" alt="...">
          
        </div>
        <div class="carousel-item">
          <img src="<?php echo $url . "/../assets/img/hombreEnElMedico.webp"?>" class="d-block w-100 img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo $url . "/../assets/img/familia.webp"?>" class="d-block w-100 img-fluid" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


  <div class="hero text-center">
    <h1>¿Quiénes somos?</h1>
    <p> En Innovawatch, somos pioneros en tecnología al servicio de la salud. 
      Nuestro compromiso es ofrecer dispositivos inteligentes que cuidan de tu bienestar y el de tus seres queridos. 
      Con soluciones innovadoras y sostenibles, trabajamos para proteger lo más importante: tu calidad de vida. 
      ¡Porque tu bienestar es nuestro orgullo!
    </p>
  </div>



<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
  <div class="carousel-item active">
      <img src="<?php echo $url . "/../assets/img/InnovaWatchX1.webp"?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>InnovaWatch X1</h5>
        <p class="text-black">El InnovaWatch X1 fue el primer modelo lanzado de nuestra marca con un innovador sistema de axulio en caso de alteración moderada y/o alta de los valores del usuario.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo $url . "/../assets/img/InnovaWatchBand.webp"?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo $url . "/../assets/img/premiumInnova.webp"?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


  <p class="colored-text">G</p>

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3207.7337884839358!2d-4.954064624327292!3d36.48814537233786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7329c0e6afb247%3A0x21553eca5885655c!2sC.%20Ribera%2C%2013%2C%20Nueva%20Andaluc%C3%ADa%2C%2029660%20Marbella%2C%20M%C3%A1laga!5e0!3m2!1ses!2ses!4v1734198806992!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

<?php require("Components/footer.php")?>