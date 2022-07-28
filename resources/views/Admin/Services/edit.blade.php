@extends('adminlte::page')

@section('title', "Serviço")

@section('content_header')
    <h1>Serviço</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('services.update', $service->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" name="name" class="form-control" placeholder="Marcos refrigeração" value="{{ $service->name ?? old('name') }}">
                </div>

                <div class="form-group">
                    <label>Nome do Dono:</label>
                    <input type="text" name="providerName" class="form-control" placeholder="Marcos Cruz" value="{{ $service->providerName ?? old('providerName') }}">
                </div>

                <div class="form-group">
                    <label>Telefone do dono:</label>
                    <input type="text" name="providerPhone" class="form-control" placeholder="21999999999" value="{{ $service->providerPhone ?? old('providerPhone') }}">
                </div>

                <div class="form-group">
                    <label for="serviceType_id">Tipo de serviço:</label>
                    <select class="custom-select rounded-0" id="serviceType_id" name="serviceType_id">
                        @foreach ($serviceTypes as $serviceType)
                            <option @if ($service->serviceType_id == $serviceType->id) selected @endif value="{{$serviceType->id}}">{{$serviceType->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="user_id">Casa recomendadora:</label>
                    <select class="custom-select rounded-0" id="user_id" name="user_id">
                        @foreach ($users as $user)
                            <option @if ($service->user_id == $user->id) selected @endif value="{{$user->id}}">{{$user->companyName}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="rating">Avaliação:</label>
                    <textarea name="rating" class="form-control" id="rating" rows="6">{{$rating->text}}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Salvar</button>
                </div>
            </form>

        </div>
    </div>
@endsection
