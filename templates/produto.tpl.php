<!doctype html>
<html lang="pt-br">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/mobile/responsive.css">
    <link rel="stylesheet" href="/css/produto.css">
    <link rel="stylesheet" href="/css/mobile/produto.responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css">
    <link rel="shortcut icon" href="#" type="image/x-icon">
</head>


<body>
    <nav class="navbar navbar-dark bg-dark c-lingth">
        <a class="navbar-brand" href="#">Menu</a>
        <ul class="nav justify-content-center m-r4">
            <li class="link">
                <a class="nav-link link" href="#">Link</a>
            </li>
            <li class="link">
                <a class="nav-link link" href="#">Link</a>
            </li>
            <li class="user">
                <a href="/user"> <i class="fa fa-user-circle"></i></a>
            </li>
            <p class="name">Olá<br><strong>nome pessoa</strong></p>

        </ul>
    </nav>

    <div id="content" class="">
        <?php include $content ?>
    </div>


    <!-- carousel -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!--    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>-->
    <!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>-->
    <!-- ...  -->


    <!-- script do carousel -->
    <script>
        $('.carousel').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
        });
    </script>
    <!-- ... -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-replace-svg="nest"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>