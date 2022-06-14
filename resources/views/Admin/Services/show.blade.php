@extends('adminlte::page')

@section('title', "Serviço")

@section('content_header')
    <h1>Serviço</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Id: </strong> {{ $service->id }}
                </li>
                <li>
                    <strong>Nome do Serviço: </strong> {{ $service->name }}
                </li>
                <li>
                    <strong>Nome do dono do Serviço: </strong> {{ $service->providerName }}
                </li>
                <li>
                    <strong>Telefone do dono do Serviço: </strong> {{ $service->providerPhone }}
                </li>
                <li>
                    <strong>Nome da casa indicadora: </strong> {{ $service->user->companyName }}
                </li>
                <li>
                    <strong>Nome do Representante: </strong> {{ $service->user->name }}
                </li>
                <li>
                    <strong>Tipo do serviço: </strong> {{ $service->serviceType->name }}
                </li>

            </ul>

            <form action="{{ route('services.destroy', $service->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>DELETAR</button>
            </form>
        </div>
    </div>
@endsection
