<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?> </title>

    <link href="<?= base_url('img/konfigurasi/icon/' . $konfigurasi['icon']) ?>" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href=" https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css " rel="stylesheet">
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.8/r-2.5.0/datatables.min.css" rel="stylesheet">
    <style>
        .navbar-nav .nav-item {
            margin-inline: 20px;
        }

        .navbar-nav .nav-item .nav-link {
            background-color: #FFF600;
            border-radius: 10px;
            box-shadow: 10px, 10px, #0000008e;
        }
    </style>
</head>

<body>
    <?= $this->include('front/layout/navbar') ?>

    <div class="" id="content">
        <?= $this->renderSection('content') ?>
    </div>

    <?= $this->include('front/layout/footer') ?>

    <script src=" https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.8/r-2.5.0/datatables.min.js"></script>
    <script src="https://kit.fontawesome.com/0f99ad410b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js "></script>
    <script>
        $(function() {
            $("#listPengumuman").DataTable({
                responsive: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/id.json',
                },
            })
            $(".owl-carousel").owlCarousel({
                autoplay: true,
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                items: Math.floor(Math.random() * 10) + 1,
                autoplayTimeout: Math.floor(Math.random() * 9000) + 5000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            });
        });
    </script>
</body>

</html>