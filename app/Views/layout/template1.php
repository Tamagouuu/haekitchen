<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Hae CSS -->
    <link rel="stylesheet" href="/css/style1.css" />

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title><?= $title ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/home">
                <img src="/img/assets-web/logo-h.svg" alt="" width="50" class="d-inline-block align-text-center" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto align-items-center">
                    <a class="nav-link mt-lg-0 mt-2" href="/home">HOME</a>
                    <a class="nav-link mt-lg-0 mt-2" href="/home#about">ABOUT</a>
                    <a class="nav-link mt-lg-0 mt-2" href="/home#contact">CONTACT</a>
                    <a class="nav-link btn tombol mt-lg-0 mt-2" href="/menu">MENU</a>
                </div>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content') ?>

    <footer id="footer" class="container-fluid bg-dark pb-3 pt-4">
        <div class="container d-flex flex-column flex-lg-row justify-content-between">
            <div class="d-flex flex-column justify-content-between mb-4 mb-lg-0 me-3 footer-left" data-aos="fade-right">
                <img src="/img/assets-web/logo-haekitchen.svg" class="logo-about img-fluid" />
                <ul class="list-unstyled">
                    <li>Made With Love by Hae Kitchen team</li>
                    <li>© Copyright 2022 Hae Kitchen. All rights reserved.</li>
                    <li>haekitchen@gmail.com</li>
                    <li>+62 857-9219-1098</li>
                    <li>Jl. Kecubung Gg. Jepun No 3B</li>
                </ul>
            </div>
            <div class="d-flex flex-sm-row flex-column justify-content-lg-between footer-right" data-aos="fade-left">
                <div class="d-flex mb-4 mb-lg-0">
                    <div class="me-5">
                        <h5 class="fs-3">PAGES</h5>
                        <ul class="list-unstyled">
                            <li><a class="text-decoration-none" href="/home">HOME</a></li>
                            <li><a class="text-decoration-none" href="/home#about">ABOUT</a></li>
                            <li><a class="text-decoration-none" href="/home#contact">CONTACT</a></li>
                            <li><a class="text-decoration-none" href="/menu">MENU</a></li>
                        </ul>
                    </div>
                    <div class="ms-4">
                        <h5 class="fs-3">SOCIAL MEDIA</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-decoration-none" href="https://www.instagram.com/hae.kitchen/" target="_blank"><i class="bi bi-instagram me-1"></i> INSTAGRAM</a>
                            </li>
                            <li>
                                <a class="text-decoration-none" href=""><i class="bi bi-facebook me-1" target="_blank"></i> FACEBOOK</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Parallax JS & JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>
    <!-- Hae JS -->
    <script src="/js/script.js"></script>
    <script src="/js/responsive.js"></script>
    <script src="/js/search.js"></script>
</body>

</html>