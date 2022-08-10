@extends('adminlte::page')

@section('title', "Serviço")

@section('content_header')
    <h1>Casa de festa</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('users.update', $user->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Nome da instituição :</label>
                    <input required type="text" value="{{$user->companyName}}" name="companyName" class="form-control" placeholder="Casa de festas Alegria">
                </div>

                <div class="form-group">
                    <label>Nome do representante:</label>
                    <input required type="text" value="{{$user->name}}" name="name" class="form-control" placeholder="Gabriela">
                </div>

                <div class="form-group">
                    <label>Telefone da representante:</label>
                    <input required type="text" value="{{$user->phone}}" name="phone" class="form-control" placeholder="21999999999">
                </div>

                <div class="form-group">
                    <label>Endereço:</label>
                    <input required type="text" value="{{$user->adress}}" name="adress" class="form-control" placeholder="Rua do Leme, 171">
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
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </form>

        </div>
    </div>
@endsection
