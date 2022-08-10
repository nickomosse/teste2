@extends('adminlte::page')

@section('title', "Serviço")

@section('content_header')
    <h1>Casa de festa</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Id: </strong> {{ $user->id }}
                </li>
                <li>
                    <strong>Nome da casa de festa </strong> {{ $user->name }}
                </li>
                <li>
                    <strong>Nome do representante: </strong> {{ $user->phone }}
                </li>
                <li>
                    <strong>Email: </strong> {{ $user->email }}
                </li>
                <li>
                    <strong>Endereço: </strong> {{ $user->adress }}
                </li>
                <li>
                    <strong>Telefone: </strong> {{ $user->phone }}
                </li>

            </ul>

            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>DELETAR</button>
            </form>
        </div>
    </div>
@endsection
