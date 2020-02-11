
<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <title>login Zinobe</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <style>
        body{
            background: url(https://uigradients.com/#DigitalWater) no-repeat center center fixed;
            background-size: cover;
            margin: 2% 20% 0;
        }

        .main-section{
            margin:100px;
            margin-top:2%;
            padding: 0;
        }

        .modal-content{
            background-color: #3b4652;
            padding: 0 20px;
            box-shadow: 0px 0px 3px #848484;
        }
        .user-img{
            margin-top: -50px;
            margin-bottom: 35px;
        }

        .user-img img{
            width: 100xp;
            height: 100px;
            box-shadow: 0px 0px 3px #848484;
            border-radius: 50%;
        }

        .form-group input{
            height: 42px;
            font-size: 18px;
            border:0;
            padding-left: 54px;
            border-radius: 5px;
        }

        .form-group::before{
            font-family: "Font Awesome\ 5 Free";
            position: absolute;
            left: 28px;
            font-size: 22px;
            padding-top:4px;
        }

        .form-group#user-group::before{
            content: "\f007";
        }

        .form-group#contrasena-group::before{
            content: "\f023";
        }

        button{
            width: 60%;
            margin: 5px 0 25px;
        }

        .forgot{
            padding: 5px 0;
        }

        .forgot a{
            color: white;
        }
    </style>

</head>
<body>
<div>
    <ul class=" nav nav-pills">
        <li class="nav-item">
            <a class="nav-link active" href="/sign-up">REGISTRO</a>
        </li>

</div>
<div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            <div class="col-12 user-img">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTmJq3zb9ulmd5ktqsHB8qnaB1fZfdhEUvRFB1p2yPt58Zw6gUC"/>
            </div>
            <form class="col-12" action="/login" method="post">
                <div class="form-group" id="user-group">
                    <input type="text" class="form-control" placeholder="Nombre de usuario" name="email"/>
                </div>
                <div class="form-group" id="contrasena-group">
                    <input type="password" class="form-control" placeholder="Contrasena" name="password"/>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Ingresar </button>
            </form>
            <?php if ($error): ?>
                <div class="alert alert-danger" role="alert">
                    Nombre de usuario y contraseña inválidos.
                </div>
            <?php endif ?>
        </div>
    </div>
</div>
</body>
</html>
