<!doctype html>

<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="google-site-verification=cFzhxMB6CUeHlzGeFsde6aRMKXlnehdwMdG6k7y90to">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Home - Habilidades obstetricas</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-164926404-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-164926404-1');
    </script>

</head>

<body>
    <?php include 'menu.php' ?>
    <?php include 'home/section_1_principal.php' ?>
    <?php include 'home/section_2_info.php' ?>
    <div class="alert alert-dark pink" role="alert">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <h5>Nuestros cursos de Capacitación en Línea estar por iniciar</h5>
                    <p>¡Inscríbete a tiempo y no te quedes fuera!</p>
                </div>

                <div class="col-md-4 btn-partner">
                    <button type="button" class="btn btn-light">Conocer más</button>
                </div>
            </div>
        </div>
    </div>

    <?php include 'home/section_3_products.php' ?>
    <?php include 'home/section_4_clientes.php' ?>
    <?php include 'home/section_5_extra.php' ?>
    <?php include "footer.php" ?>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

                <div class="modal-body">

                    <iframe width="100%" height="600px" src="https://www.youtube.com/embed/gbEZfRgDW7A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>

            </div>

        </div>

    </div>





    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/float-panel.js"></script>

    <script>
        $(document).ready(function() {

            var owl = $('.owl-carousel');

            owl.owlCarousel({

                items: 4,

                loop: true,

                margin: 10,

                autoplay: true,

                autoplayTimeout: 2500,

                autoplayHoverPause: true

            });

            $('.play').on('click', function() {

                owl.trigger('play.owl.autoplay', [1000])

            })

            $('.stop').on('click', function() {

                owl.trigger('stop.owl.autoplay')

            });

            $('.owl-carousel').owlCarousel({

                margin: 10,

                loop: true,

                autoWidth: true,

                items: 4

            })

        });
    </script>

    <script>
        (function(w, d, u) {

            var s = d.createElement('script');
            s.async = true;
            s.src = u + '?' + (Date.now() / 60000 | 0);

            var h = d.getElementsByTagName('script')[0];
            h.parentNode.insertBefore(s, h);

        })(window, document, 'https://cdn.bitrix24.es/b15117079/crm/site_button/loader_2_bgr6sa.js');
    </script>

</body>

</html>