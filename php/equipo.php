<?php include('header.php'); ?>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
    .content-section {
        background-color: #fff;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
    }

    h2.section-title,
    h3.section-title {
        color: #333366;
        font-size: 2.4rem;
        margin-bottom: 20px;
        text-align: center; 
    }

    p,
    .profile-description {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #555;
        text-align: justify;
        margin-bottom: 20px;
    }

    .profile {
        margin-bottom: 30px;
    }

    .profile img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        border: 3px solid #ddd;
        box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    }

    ul {
        line-height: 1.8;
        padding-left: 20px;
    }

    ul li {
        margin-bottom: 10px;
    }

    a,
    .waze-link {
        color: #337ab7;
    }

    a:hover,
    .waze-link:hover {
        text-decoration: none;
        color: #23527c;
    }
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10 content-section">
            <h3 class="section-title">Conoce a Nuestro Equipo</h3>
            <div class="row">
           
                <div class="col-md-4 text-center profile">
                    <img src="./images/foto1.jpg" alt="Propietario 1" class="img-fluid rounded-circle">
                    <p class="profile-description">Juan Pérez Fernandez es fundador de Galaxi Empire y desarrollador senior con más de 10 años de experiencia en desarrollo de software.</p>
                </div>
                <div class="col-md-4 text-center profile">
                    <img src="./images/foto3.jpg" alt="Propietario 2" class="img-fluid rounded-circle">
                    <p class="profile-description">María López es la Directora de Proyectos con especialidad en gestión ágil y experiencia extensa en el mercado internacional.</p>
                </div>
                <div class="col-md-4 text-center profile">
                    <img src="./images/foto2.jpg" alt="Propietario 3" class="img-fluid rounded-circle">
                    <p class="profile-description">Carlos Sánchez es el Arquitecto de Software líder, con un enfoque en soluciones escalables y seguras para empresas de todos los tamaños.</p>
                </div>
            </div>

            <h3 class="section-title">Encuéntranos Aquí</h3>
            <div class="row">
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3880.882151507486!2d-90.51306664317565!3d14.612780105226522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a3cdf6400001%3A0xab8946e80195f4eb!2sRenovati!5e0!3m2!1ses!2sgt!4v1712886837716!5m2!1ses!2sgt" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <a href="https://waze.com/ul?ll=14.613172,-90.514802&navigate=yes" class="waze-link d-block mt-3" target="_blank"><i class="fab fa-waze"></i> Dirígete con Waze</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
