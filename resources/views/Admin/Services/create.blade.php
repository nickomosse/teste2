@extends('adminlte::page')

@section('title', "serviço")

@section('content_header')
    <h1>Novo serviço</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('services.store') }}" class="form" method="POST">
                @csrf

                <div class="form-group">
                    <label>Nome do serviço:</label>
                    <input type="text" name="name" class="form-control" placeholder="Marcos refrigeração">
                </div>

                <div class="form-group">
                    <label>Nome do Dono:</label>
                    <input type="text" name="providerName" class="form-control" placeholder="Marcos Cruz">
                </div>

                <div class="form-group">
                    <label>Telefone do dono:</label>
                    <input type="text" name="providerPhone" class="form-control" placeholder="21999999999">
                </div>

                <div class="form-group">
                    <label for="serviceType_id">Tipo de serviço:</label>
                    <select class="custom-select rounded-0" id="serviceType_id" name="serviceType_id">
                        @foreach ($serviceTypes as $serviceType)
                            <option value="{{$serviceType->id}}">{{$serviceType->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="user_id">Casa recomendadora:</label>
                    <select class="custom-select rounded-0" id="user_id" name="user_id">
                        @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->companyName}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Salvar</button>
                </div>
            </form>

        </div>
    </div>
@endsection
