<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- CSS only -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
            background-color: #FBF8F8;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        header {
            padding: 20px;
            background-color: #F0EDED;
        }
        img{}
        .menu {
            min-height: 40px;
            background-color: #2EB8AC;
        }
        main {
            text-align: center;

        }
        p.principal {
            line-height: 30px;
        }
        .btn-principal {
            background-color: #2EB8AC;
            border-radius: 30px;
        }
        h1 {
            text-align: center;
        }
        </style>
    </head>
    <body>
        <header class="">
            <img class="img w-15 mx-auto d-block" src="{!! asset('img/logo.png')!!}" alt="">
        </header>
        <section class="menu">

        </section>
        <section>
            <h1 class="h2 mt-3 mx-auto">{{$user->companyName}}</h1>
            <div class="row">
                <div class="col-sm-4 mx-auto">
                    <div class="card mb-4">

                        <div class="card-body">
                            <form action="{{ route('g.profile.update') }}" class="form" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label>Nome da instituição :</label>
                                    <input required type="text" value="{{$user->companyName}}" name="companyName" class="form-control" placeholder="Casa de festas Alegria">
                                </div>

                                <div class="form-group">
                                    <label>Nome do representante:</label>
                                    <input required type="text" value="{{$user->name}}" name="name" class="form-control" placeholder="Gabriela">
                                </div>

                                <div class="form-group">
                                    <label>Telefone do prestador do serviço:</label>
                                    <input required type="text" value="{{$user->phone}}" name="phone" class="form-control" placeholder="21999999999">
                                </div>

                                <div class="form-group">
                                    <label>Email:</label>
                                    <input required type="email" value="{{$user->email}}" name="email" class="form-control" placeholder="email@email.com">
                                </div>

                                <div class="form-group">
                                    <label>Nova senha: <span style="font-size: 9px"> (opcional) </span></label>
                                    <input type="password" name="password" class="form-control">
                                </div>


                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Salvar alterações!</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>

