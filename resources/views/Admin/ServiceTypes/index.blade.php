@extends('adminlte::page')

@section('title', 'Tipos de Serviço')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="" class="active">Tipos de Serviço</a></li>
    </ol>

    <h1>Tipos de Serviço <a href="{{route('servicetypes.create')}}" class="btn btn-dark">Adicionar</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th width="270">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($serviceTypes as $serviceType)
                        <tr>
                            <td>
                                {{ $serviceType->id }}
                            </td>
                            <td>
                                {{ $serviceType->name }}
                            </td>
                            <td style="width=10px;">
                                <a href="{{ route('servicetypes.edit', $serviceType->id) }}" class="btn btn-info">Editar</a>
                                <a href="{{ route('servicetypes.show', $serviceType->id) }}" class="btn btn-warning">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@stop
