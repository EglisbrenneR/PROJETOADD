<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>loja</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/icon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker me-2"></i>R. Manoel Inácio de Lucena, 451 - Centro, Brejo Santo - CE, 63260-000</small>
                    <small class="me-3 text-light"><i class="fa fa-phone me-2"></i>+55 (88) 3531-4191</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>add@addsolucoes.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-whatsapp fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    
    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
            <img src="img/logo1.png" width="120" height="40" alt="Logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Inicio</a>
                    <a href="sobre.php" class="nav-item nav-link">Sobre</a>
                    <a href="servicos.php" class="nav-item nav-link">Serviços</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Paginas</a>
                        <div class="dropdown-menu m-0">
                            <a href="escolha.php" class="dropdown-item">PORQUE NOS ESCOLHER?</a>
                            <a href="team.php" class="dropdown-item">NOSSO TIME</a>
                            <a href="testemunhas.php" class="dropdown-item">O QUE FALAM DA ADD SOLUÇÕES</a>
                            <a href="orcamentos.php" class="dropdown-item">ORÇAMENTOS</a>
                        </div>
                    </div>
                    <a href="contato.php" class="nav-item nav-link">Contato</a>
                </div>
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                <a href="pagloja.php" class="btn btn-primary py-2 px-4 ms-3">ENTRAR NA LOJA</a>
            </div>
        </nav>
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel"> 
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/pg1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-1" style="max-width:1500px;">
                            <h3 class="display-1 text-white mb-md-1 text-uppercas mb-3 animated zoomIn">CRIATIVIDADE E INOVAÇÃO</h3>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/pg1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-1" style="max-width: 1500px;">
                            <h3 class="display-1 text-white mb-md-1 text-uppercase mb-3 animated zoomIn">AQUI TEM O MELHOR DA TECNOLOGIA</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <?php
        include "loja/loja.php";
    ?>


    <!-- Testimonial Start -->
    <div class="container-fluid py- wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">NOSSOS PARCEIROS</h5>
            </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Vendor Start -->
    <div class="container-fluid py- wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py- mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/vendor-1.jpg" alt="">
                    <img src="img/vendor-2.jpg" alt="">
                    <img src="img/vendor-3.jpg" alt="">
                    <img src="img/vendor-4.jpg" alt="">
                    <img src="img/vendor-5.jpg" alt="">
                    <img src="img/vendor-6.jpg" alt="">
                    <img src="img/vendor-7.jpg" alt="">
                    <img src="img/vendor-8.jpg" alt="">
                    <img src="img/vendor-9.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

    <?php
        include_once "footer.php"
    ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>