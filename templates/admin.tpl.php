<!doctype html>
<html lang="pt-br">

<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/admin/home.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
            integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"
            integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg=="
            crossorigin="anonymous"></script>

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
                    <li class="nav-item">
                        <a href="/" class="nav-link <?php if (resolve('/')) : ?> active <?php endif ?>">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar a pagína inicial</a>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"
        integrity="sha512-6Uv+497AWTmj/6V14BsQioPrm3kgwmK9HYIyWP+vClykX52b0zrDGP7lajZoIY1nNlX4oQuh7zsGjmF7D0VZYA=="
        crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-replace-svg="nest"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"
        integrity="sha512-/DXTXr6nQodMUiq+IUJYCt2PPOUjrHJ9wFrqpJ3XkgPNOZVfMok7cRw6CSxyCQxXn6ozlESsSh1/sMCTF1rL/g=="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>