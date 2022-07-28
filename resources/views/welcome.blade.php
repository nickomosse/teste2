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
            <h1 class="pt-5 pb-1 font-weight-bold">Em busca de um profissional?</h1>
            <h2 class="h3 p-2">Somos uma solução para <br> o salão de eventos, buffet e casas de festas</h2>
            <img class="w-25" src="{!! asset('img/img1.png')!!}" alt="">
            <p class="h5 py-4 principal font-weight-bold">Com o Indica Alguém você poderá encontrar indicações <br> de casas de festas quando estiver necessitando de algum serviço!</p>
            <a href="" class="px-5 py-2 btn btn-success font-weight-bold btn-principal">BUSCAR PROFISSIONAL!</a><br>

            {{-- <div class="mx-auto my-5 scrolltest">
                <a href="" class="px-5 py-2 btn btn-success font-weight-bold btn-principal">BUSCAR PROFISSIONAL!</a><br>
                <a href="" class="px-5 py-2 btn btn-success font-weight-bold btn-principal">BUSCAR PROFISSIONAL!</a><br>
                <a href="" class="px-5 py-2 btn btn-success font-weight-bold btn-principal">BUSCAR PROFISSIONAL!</a><br>
                <a href="" class="px-5 py-2 btn btn-success font-weight-bold btn-principal">BUSCAR PROFISSIONAL!</a><br>
                <a href="" class="px-5 py-2 btn btn-success font-weight-bold btn-principal">BUSCAR PROFISSIONAL!</a><br>
                <a href="" class="px-5 py-2 btn btn-success font-weight-bold btn-principal">BUSCAR PROFISSIONAL!</a><br>
                <a href="" class="px-5 py-2 btn btn-success font-weight-bold btn-principal">BUSCAR PROFISSIONAL!</a><br>
                <a href="" class="px-5 py-2 btn btn-success font-weight-bold btn-principal">BUSCAR PROFISSIONAL!</a><br>
                <a href="" class="px-5 py-2 btn btn-success font-weight-bold btn-principal">BUSCAR PROFISSIONAL!</a><br>
                <a href="" class="px-5 py-2 btn btn-success font-weight-bold btn-principal">BUSCAR PROFISSIONAL!</a><br>
                <a href="" class="px-5 py-2 btn btn-success font-weight-bold btn-principal">BUSCAR PROFISSIONAL!</a><br>
                <a href="" class="px-5 py-2 btn btn-success font-weight-bold btn-principal">BUSCAR PROFISSIONAL!</a><br>
            </div>
            <a href="" class="px-5 py-2 btn btn-success font-weight-bold btn-principal">BUSCAR PROFISSIONAL!</a><br>
            <a href="" class="px-5 py-2 btn btn-success font-weight-bold btn-principal">BUSCAR PROFISSIONAL!</a><br>
            <br>
            <a href="" class="px-5 py-2 btn btn-success font-weight-bold btn-principal">BUSCAR PROFISSIONAL!</a><br>
            <a href="" class="px-5 py-2 btn btn-success font-weight-bold btn-principal">BUSCAR PROFISSIONAL!</a><br>
            <a href="" class="px-5 py-2 btn btn-success font-weight-bold btn-principal">BUSCAR PROFISSIONAL!</a><br>
            <br>
            <a href="" class="px-5 py-2 btn btn-success font-weight-bold btn-principal">BUSCAR PROFISSIONAL!</a><br>
            <a href="" class="px-5 py-2 btn btn-success font-weight-bold btn-principal">BUSCAR PROFISSIONAL!</a><br>
            <a href="" class="px-5 py-2 btn btn-success font-weight-bold btn-principal">BUSCAR PROFISSIONAL!</a><br>

            <a href="" class="px-5 py-2 btn btn-success font-weight-bold btn-principal">BUSCAR PROFISSIONAL!</a><br>
            <a href="" class="px-5 py-2 btn btn-success font-weight-bold btn-principal">BUSCAR PROFISSIONAL!</a><br>
            <a href="" class="px-5 py-2 btn btn-success font-weight-bold btn-principal">BUSCAR PROFISSIONAL!</a><br> --}}

        </main>
    </body>
</html>

