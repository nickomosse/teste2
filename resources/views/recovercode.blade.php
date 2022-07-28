<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recuperar Senha</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        * {
            text-align: center !important;
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
                color: white;
                font-weight: bold;
                text-align: center;
                font-size: 24px;
            }
            h1 {
                font-size: 20px;
                font-weight: bold;
            }
            h2 {
                font-size: 16px;
            }
            label {
                font-weight: bold;
            }
    </style>
</head>
<body>
    <header class="">
        <img class="img w-15 mx-auto d-block" src="{!! asset('img/logo.png')!!}" alt="">
    </header>
    <section class="menu">

    </section>
    <div class="container w-sm-50">
        <form action="recovercode" method="post">
            @csrf
            @if ($errors->any())
                {{dd($errors)}}
            @endif
            <h1 class="mt-4 mb-2">Vamos recuperar sua senha!</h1>
            <h2 class="mb-4">Digite o código enviado em seu email:</h2>

            <div class="form-group col-sm-6 mx-auto">
                <label for="code">Código:</label>
                <input type="text" class="form-control" id="code" name="code" placeholder="5412" value="{{old('code')}}" >
            </div>

            <input type="hidden" id="servercode" name="servercode" value="{{$code}}">

            <button type="submit" class="btn btn-principal px-5 mx-auto my-4 d-block">Recuperar!</button>
        </form>


    </div>
</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


</html>
