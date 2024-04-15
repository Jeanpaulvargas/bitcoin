<?php include('header.php'); ?>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

<style>
  .content-section {
    background-color: #fff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 50px;
  }

  .card {
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
  }

  .card:hover {
    transform: scale(1.05);
  }

  .highlighted-project {
    transform: scale(1.1);
  }

  h2.section-title,
  h3.section-title {
    color: #333366;
    font-size: 2.4rem;
    margin-bottom: 20px;
    text-align: center;
  }

  .card-body {
    text-align: center;
  }

  .card-title,
  .card-text,
  .testimonial,
  .btn {
    display: block;
    width: 100%;
    margin: auto;
  }

  p,
  ul {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #555;
    text-align: justify;
  }

  ul {
    padding-left: 20px;
  }

  ul li {
    margin-bottom: 10px;
  }

  a {
    color: #337ab7;
  }

  a:hover {
    text-decoration: none;
    color: #23527c;
  }

  .testimonial {
    font-style: italic;
    color: #777;
    font-size: 0.9rem;
  }

  .row.justify-content-center {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
</style>

<br><br><br>

<div class="row justify-content-center">
  <div class="col-12 text-center mb-4">
    <h2 class="section-title">Portafolio de Trabajos</h2>
  </div>
</div>
<div class="row">

  <div class="col-sm-6 col-lg-3 mb-4">
    <div class="card">
      <img src="./images/port1.png" class="card-img-top" alt="Proyecto 1">
      <div class="card-body">
        <h5 class="card-title">Proyecto 1</h5>
        <p class="card-text">Diseño y desarrollo de plantillas personalizadas para blogs y sitios comerciales, usando HTML5 y css para garantizar eficiencia.</p>
        <p class="testimonial">"Estas plantillas transformaron la forma en que interactuamos con nuestros clientes." - Daniel Moran Prox. </p>
        <a href="./proyecto1.html/bienvenida.html" class="btn btn-primary">Ver Proyecto</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-lg-3 mb-4">
    <div class="card">
      <img src="./images/port2.png" class="card-img-top" alt="Proyecto 2">
      <div class="card-body">
        <h5 class="card-title">Proyecto 2</h5>
        <p class="card-text">Creación de formularios responsive utilizando frameworks modernos como Bootstrap.</p>
        <p class="testimonial">"La funcionalidad responsive de estos formularios ha aumentado nuestra tasa de conversión en un 30%." - Francisco Daniel Guardiola. </p>
        <a href="./proyecto1.html/index.html" class="btn btn-primary">Ver Proyecto</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-lg-3 mb-4">
    <div class="card">
      <img src="./images/port3.png" class="card-img-top" alt="Proyecto 3">
      <div class="card-body">
        <h5 class="card-title">Proyecto 3</h5>
        <p class="card-text">Desarrollo de una página web responsive con enfoque en SEO y velocidad de carga, optimizada para todos los dispositivos.</p>
        <p class="testimonial">"Gracias al enfoque SEO de esta página, hemos visto un incremento significativo en nuestro tráfico web." - Alejandro Mik O. </p>
        <a href="./proyecto1.html/INDEX2.HTML" class="btn btn-primary">Ver Proyecto</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-lg-3 mb-4">
    <div class="card">
      <img src="./images/port4.png" class="card-img-top" alt="Proyecto 4">
      <div class="card-body">
        <h5 class="card-title">Proyecto 4</h5>
        <p class="card-text">Implementación de una aplicación web interactiva utilizando Bootstrap para mejorar la interfaz de usuario y la experiencia general.</p>
        <p class="testimonial">"La interfaz moderna y la usabilidad mejorada han sido claves para el éxito de nuestra última campaña." - Roger Ronaldo Carpeollo. </p>
        <a href="./proyecto1.html/index3.html" class="btn btn-primary">Ver Proyecto</a>
      </div>
    </div>
  </div>
</div>

<br><br><br><br><br>

<?php include('footer.php'); ?>
