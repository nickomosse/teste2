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
            /* ::-webkit-scrollbar{
                width: 2em;
            }
            ::-webkit-scrollbar-track{
                background: #2F2E30;
                border-radius: 10px;
            }
            ::-webkit-scrollbar-thumb{
                background: #E6D839;
                border-radius: 10px;
            }
            .scrolltest {
                width: 500px;
                height: 200px;
                overflow: hidden;
                overflow-y: scroll;
            }
            .scrolltest::-webkit-scrollbar{
                width: 5em;
            } */
        </style>
    </head>
    <body>
        <header class="">
            <img class="img w-15 mx-auto d-block" src="{!! asset('img/logo.png')!!}" alt="">
        </header>
        <section class="menu">

        </section>
        <main>
            <h2 class="mt-3">Bem-vindo,</h2>
            <h1>{{$user->companyName}}</h1>

            <div class="my-4">
                <h3>Editar perfil:</h3>
                <a href="#" class="btn btn-info">Editar perfil</a>
            </div>
            <div class="mb-4">
                <h3>Veja abaixo as avaliações que você realizou</h3>
                <a href="#" class="btn btn-info">Minhas avaliações</a>
            </div>
            <div class="mb-4">
                <h3>Veja abaixo as indicações que você realizou</h3>
                <a href="#" class="btn btn-info">Minhas indicações</a>
            </div>
            <div class="mb-2">
                <h3>Fazer uma indicação?</h3>
                <p>Clique no botão abaixo para fazer uma indicação <br>
                de serviços para as outras casas de festas:</p>
            </div>

            <a href="#" class="btn btn-info">Indicar!</a>
        </main>
    </body>
</html>

