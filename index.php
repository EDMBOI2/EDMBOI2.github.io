<!doctype html>
<html lang="en">
    <head>
        <title>Pet Store</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"/>

        <!-- Font Awesome -->
        <link 
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
            rel="stylesheet" 
            crossorigin="anonymous"
            referrerpolicy="no-referrer"/>

    </head>
    <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"> <i class="fas fa-utensils"></i> Pet Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#perros">Perros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gatos">Gatos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonios">Testimonios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contactos">Contactos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contactos">Peluditos</a>
                    </li>
                </ul>
            </div>    
        </div>
    </nav>

    <section id="banner" class="container-fluid p-0">
        <div class="banner-img" style="position:relative; background:url('images/slider-image1.jpg') center/cover no-repeat; height:400px;">
            <div class="banner-text" style="position:absolute; top:50%; left:50%; transform: translate(-50%, -50%); text-align:center; color:#000;">
                <h1>Pet Store</h1>
                <p>Tienda de comida para mascotas</p>
                <a href="#menu" class="btn btn-primary">Ver menú</a>
            </div>
        </div>
    </section>

    <section id="welcome" class="container mt-4 text-center">
        <div class="jumbotron bg-dark text-white">
            <h2>Welcome to the pet store</h2>
            <p>
            ¿Estás listo para explorar un mundo de sabores para tu compañero de cuatro patas?
            </p>
        </div>   
    </section>

    <section id="peluditos" class="container mt-4 text-center">
        <h2>Nuestros peluditos</h2>
        <div class="row">
            <!-- Peludito 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="images/peluditos/Apolo.jpg" class="card-img-top" alt="Peludito 1"/>
                    <div class="card-body">
                        <h5 class="card-title">Peludito 1</h5>
                        <p class="card-text">Él es Venus</p>
                        <div class="social-icons mt-3">
                            <a href="#" class="text-dark me-2" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="text-dark me-2" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-dark me-2" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Peludito 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="images/peluditos/Apolo.jpg" class="card-img-top" alt="Peludito 2"/>
                    <div class="card-body">
                        <h5 class="card-title">Peludito 2</h5>
                        <p class="card-text">Él es Apolo</p>
                        <div class="social-icons mt-3">
                            <a href="#" class="text-dark me-2" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="text-dark me-2" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-dark me-2" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Peludito 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="images/peluditos/Apolo.jpg" class="card-img-top" alt="Peludito 3"/>
                    <div class="card-body">
                        <h5 class="card-title">Peludito 3</h5>
                        <p class="card-text">Él es Gasper</p>
                        <div class="social-icons mt-3">
                            <a href="#" class="text-dark me-2" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="text-dark me-2" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-dark me-2" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonios" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Testimonios</h2>
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="card mb-4 w-100">
                        <div class="card-body">
                            <p class="card-text">Excelentes productos</p>
                        </div>
                        <div class="card-footer text-muted">
                            Edward
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card mb-4 w-100">
                        <div class="card-body">
                            <p class="card-text">Excelentes productos</p>
                        </div>
                        <div class="card-footer text-muted">
                            Tania
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="container mt-4">
        <h2 class="text-center">Productos mas vendidos</h2>
        <br/>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col d-flex">
                <div class="card">
                    <img src="images/productos/catchowadultospescado.jpeg" alt="catchowadultospescados" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Cat Chow adultos sabor a pescado fortidefense</h5>
                        <p class="card-text"><strong>Precio:</strong>$134.500 COP</p>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card">
                    <img src="images/productos/donkatadultos.jpg" alt="catchowadultospescados" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Don Kat Adultos</h5>
                        <p class="card-text"><strong>Precio:</strong>$92.000 COP</p>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card">
                    <img src="images/productos/mirringogatitos.jpg" alt="catchowadultospescados" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Mirringo gatitos</h5>
                        <p class="card-text"><strong>Precio:</strong>$10.500 COP</p>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card">
                    <img src="images/productos/latahillsperroadultopollo.jpg" alt="catchowadultospescados" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Hill’s Science Diet Perro Adulto Pollo Lata</h5>
                        <p class="card-text"><strong>Precio:</strong>$19.000 COP</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-light text-center">
        <p> &copy; Pet Store, todos los derechos reservados.</p> 
        <p>Desarrollado por cesar</p>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"
    ></script>
</body>
</html>
