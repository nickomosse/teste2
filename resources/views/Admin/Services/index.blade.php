@extends('adminlte::page')

@section('title', 'Serviço')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="" class="active">Serviço</a></li>
    </ol>

    <h1>Serviço <a href="{{route('services.create')}}" class="btn btn-dark">Adicionar</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Serviço</th>
                        <th width="270">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <td>
                                {{ $service->id }}
                            </td>
                            <td>
                                {{ $service->providerName }}
                            </td>
                            <td>
                                {{ $service->providerPhone }}
                            </td>
                            <td>
                                {{ $service->name }}
                            </td>
                            <td style="width=10px;">
                                <a href="{{ route('services.edit', $service->id) }}" class="btn btn-info">Editar</a>
                                <a href="{{ route('services.show', $service->id) }}" class="btn btn-warning">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@stop
