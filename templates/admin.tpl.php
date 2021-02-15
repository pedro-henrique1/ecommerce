<!doctype html>
<html lang="pt-br">

<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/admin/home.css">
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow" style="height: 5vh">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Navbar</a>
            <input class="form-control w-76 " type="search" placeholder="Pesquisar" aria-label="Pesquisar"
                   style="border-radius: 0">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </nav>


        <nav class="col-md-2 d-none d-md-block sidebar bg-light"
             style="height: 100vh; border: 1px solid rgba(0,0,0,.125); left: -1rem">
            <div class="sidebar-sticky">
                <ul id="main-menu" class="nav flex-column" style="margin-top: 3.2rem;">
                    <li class="nav-item c-dark">
                        <a href="/admin" class="nav-link <?php if (resolve('/admin')) : ?> active <?php endif ?>">
                            <i class="fas fa-home"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/users"
                           class="nav-link <?php if (resolve('/admin/users.*')) : ?> active <?php endif ?>">
                            <i class="fas fa-user-friends"></i> clientes</a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/produtos"
                           class="nav-link <?php if (resolve('/admin/produtos.*')) : ?> active <?php endif ?>">
                            <i class="fa fa-shopping-cart"></i> produtos</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="col-md-9 ml-sm-auto col-lg-10 px-4 pt-5 mt-4">
            <div id="content">
                <?php include $content ?>
            </div>
        </main>
    </div>
</div>
<script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-replace-svg="nest"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>