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
                text-align: center;
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

            ::-webkit-scrollbar{
                width: 1.5em !important;
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
                height: 300px;
                overflow: hidden;
                overflow-y: scroll;
            }
            .scrolltest::-webkit-scrollbar{
                width: 5em;
            }
            p {
                font-weight: bold;
                font-size: 18px;
            }
            .card {
                background: #F0EDED;
            }
            a{
                width: 400px !important;
            }
            .card {
                border-radius: 15px;
                width: 90%;
            }
            .btn {
                max-width: 50%;
            }
        </style>
    </head>
    <body>
        <header class="">
            <img class="img w-15 mx-auto d-block" src="{!! asset('img/logo.png')!!}" alt="">
        </header>
        <section class="menu">

        </section>
        <main>

            <div class="container w-sm-50 mt-4">
                <div class="row">

                    <div class="col-sm-12 mb-4 mx-auto">
                        <div class="mx-2 card">
                            <h3 class="mt-3">{{$service->providerName}}</h3>
                            <p>{{$service->providerPhone}}</p>
                            <h4 class="mt-4">Avaliações:</h2>

                            @if ($haveRating)
                                <hr>
                                <h4>{{$myRating->user->companyName}}</h3>
                                <h5 class="mb-3">{{$myRating->created_at}}</h3>
                                <p>{{$myRating->text}}</p>
                                <hr>
                            @endif

                            @foreach ($ratings as $rating)
                                <hr>
                                <h4>{{$rating->user->companyName}}</h3>
                                <h5 class="mb-3">{{$rating->created_at}}</h3>
                                <p>{{$rating->text}}</p>
                                <hr>
                            @endforeach

                            @if ($haveRating)
                                <a href="{{route('g.ratings.edit', [$service->id, $myRating->id])}}" class="btn btn-success mx-auto my-3">Editar avaliação</a>
                            @else
                                <a href="{{route('g.ratings.create', $service->id)}}" class="btn btn-success mx-auto my-3">Criar avaliação</a>
                            @endif

                        </div>
                    </div>

                </div>
            </div>


        </main>
    </body>
</html>

