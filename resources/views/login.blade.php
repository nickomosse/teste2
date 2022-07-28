<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<style>
    form {
        margin-top: 150px;
        text-align: center;
        font-weight: bold;
        font-size: 30px;
    }
    p {
        color: red;
        font-size: 18px;
    }
    .card{
        border: solid 2px #2EB8AC;
        border-radius: 5px;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <form action="{{route('authenticate')}}" method="post" class="col-sm-4 mx-auto">
                @csrf
                <div class="card">
                    <div class="card-body">
                        @if (session('error'))
                            <p>{{session('error')}}</p>

                            <hr>
                        @endif
                        <div class="form-group">
                            <label for="phone">Telefone:</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="21999999999">
                        </div>
                        <div class="form-group">
                            <label class="mt-2" for="password">Senha:</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <button type="submit" class="btn btn-info mt-4 px-5">Entrar</button>
                    </div>
                </div>

            </form>
        </div>

    </div>
</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


</html>
