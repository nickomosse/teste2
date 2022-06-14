<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="{{route('save')}}" method="post">
            @csrf
            @if ($errors->any())
                erro
            @endif
            <div class="form-group">
                <label for="companyName">Nome do empresa</label>
                <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Empresa do Tutú">
            </div>
            <div class="form-group">
                <label for="name">Nome do dono</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Artur Santos">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="artursantos@trambique.com">
            </div>
            <div class="form-group">
                <label for="adress">Endereço</label>
                <input type="text" class="form-control" id="adress" name="adress" placeholder="Rua do Leme, 171">
            </div>
            <div class="form-group">
                <label for="phone">Telefone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="21171717171">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


</html>
