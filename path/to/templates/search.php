<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Busqueda Zinobe</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>
        body{
            background: url(https://uigradients.com/#DigitalWater) no-repeat center center fixed;
            background-size: cover;
            margin: 2% 20% ;
        }
    </style>

</head>
<body>
<header>
    <nav class="navbar  navbar-light bg-light">
        <a class="navbar-brand navbar-expand-lg" href="#">BUSCADOR</a>
        <form class="form-inline my-4 my-lg-0" action="/search" method="post">
            <input class="form-control mr-sm-1" type="text" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my- my-sm-10" type="submit">Buscar</button>
            <a href="/"class="btn btn-danger" >Logout</a>
        </form>
    </nav>

</header>

<div style="height:50px"></div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Documento</th>
                        <th>Correo</th>
                        <th>Pais</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?=$user->name?></td>
                            <td><?=$user->document?></td>
                            <td><?=$user->email?></td>
                            <td><?=$user->country?></td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>