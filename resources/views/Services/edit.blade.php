<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IndicaAlguém | Serviços - Cadastrar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


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

</body>
</html>

<header class="">
    <img class="img w-15 mx-auto d-block" src="{!! asset('img/logo.png')!!}" alt="">
</header>
<section class="menu">

</section>

<section>
    <h1 class="h2 my-4">Editar serviço indicado</h1>

    <div class="row">
        <div class="col-sm-4 mx-auto">
            <div class="card mb-4">
                <h2 class="h6 mt-3 mx-auto">Preencha os campos abaixo:</h2>
                <div class="card-body">
                    <form action="{{ route('g.services.update', $service->id) }}" class="form" method="POST">
                        @csrf

                        <div class="form-group">
                            <label>Nome do serviço:</label>
                            <input required type="text" value="{{$service->name}}" name="name" class="form-control" placeholder="Marcos refrigeração">
                        </div>

                        <div class="form-group">
                            <label>Nome do prestador do serviço:</label>
                            <input required type="text" value="{{$service->providerName}}" name="providerName" class="form-control" placeholder="Marcos Cruz">
                        </div>

                        <div class="form-group">
                            <label>Telefone do prestador do serviço:</label>
                            <input required type="text" value="{{$service->providerPhone}}" name="providerPhone" class="form-control" placeholder="21999999999">
                        </div>

                        <div class="form-group">
                            <label for="serviceType_id">Tipo de serviço:</label>
                            <select class="custom-select rounded-0" id="serviceType_id" required name="serviceType_id">
                                @foreach ($serviceTypes as $serviceType)
                                    <option @if ($serviceType == $service->serviceType) selected @endif value="{{$serviceType->id}}">{{$serviceType->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-dark">Salvar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</section>
