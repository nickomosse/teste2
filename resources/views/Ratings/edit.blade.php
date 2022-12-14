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
                            <h4 class="mt-4">Texto da avalia????o:</h2>
                            <form action="{{route('g.ratings.update', $rating->id)}}" method="post" class="form">
                                @csrf
                                @method('PUT')
                                <div class="form-group col-sm-8 mx-auto mt-2">
                                    <textarea name="ratingtext" class="form-control" cols="30" rows="10">{{$rating->text}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-success mb-5">Salvar avalia????o!</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>


        </main>
    </body>
</html>

