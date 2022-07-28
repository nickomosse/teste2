<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar</title>
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
        <form action="{{route('save')}}" method="post">
            @csrf
            @if ($errors->any())
                {{dd($errors)}}
            @endif
            <h1 class="mt-4 mb-2">Vamos realizar seu cadastro!</h1>
            <h2 class="mb-4">Informe abaixo as informações necessárias:</h2>
            <div class="row mb-3">
                <div class="form-group col-sm-6">
                    <label for="companyName">Nome da empresa:</label>
                    <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Empresa do Tutú" value="{{old('companyName')}}">
                </div>
                <div class="form-group col-sm-6">
                    <label for="name">Nome do dono:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Artur Santos" value="{{old('name')}}">
                </div>
            </div>

            <div class="form-group col-sm-6 mx-auto">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="artursantos@trambique.com" value="{{old('email')}}" >
            </div>
            <div class="form-group col-sm-6 mx-auto">
                <label for="adress">Endereço:</label>
                <input type="text" class="form-control" id="adress" name="adress" placeholder="Rua do Leme, 171" value="{{old('adress')}}">
            </div>
            <div class="form-group col-sm-6 mx-auto">
                <label for="phone">Telefone:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="21171717171" value="{{old('phone')}}">
            </div>
            <div class="form-group col-sm-6 mx-auto">
                <label for="password">Senha:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <button type="submit" class="btn btn-principal px-5 mx-auto my-4 d-block">Cadastrar!</button>
        </form>


    </div>
</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


</html>
