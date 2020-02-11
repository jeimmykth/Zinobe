<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>registro Zinobe</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>
        body {

            background-size: cover;
            margin: 2% 25% 0;
        }
    </style>
</head>
<body>
<header style="height: 10px">
</header>
<div style="height: 2px;"></div>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="card shadow-lg p-5 mb-7 bg-white ">
                <div class="card-header">Formulario Registro</div>
                <div class="card-body">
                    <form id="form1" action="/sign-up" method="post" class="needs-validation">
                        <div class="form-row">
                            <div class="col-md-12 mb-2">
                                <label for="nombre">Nombre</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="" value=""
                                       required>
                                <div class="valid-feedback">¡Ok válido!</div>
                                <div class="invalid-feedback">Complete el campo.</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-2">
                                <label for="documento">Documento</label>
                                <input name="document" type="text" class="form-control" id="document" placeholder=""
                                       required>
                                <div class="valid-feedback">¡Ok válido!</div>
                                <div class="invalid-feedback">Complete el campo.</div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="country">Pais</label>
                                    <input name="country" type="text" class="form-control" id="country" placeholder=""
                                           required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-8 mb-3">
                                    <label for="usuario">Correo electronico</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        </div>
                                        <input name="email" type="email" class="form-control" id="email" placeholder=""
                                               aria-describedby="inputGroupPrepend" required>
                                        <div class="valid-feedback">¡Ok válido!</div>
                                        <div class="invalid-feedback">Complete el campo.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-">
                                    <label for="password">Contraseña</label>
                                    <input name="password" type="password" class="form-control" id="password"
                                           placeholder="" value="" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Enviar</button>
                    </form>
                    <?php if ($error): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $this->e($error) ?>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>