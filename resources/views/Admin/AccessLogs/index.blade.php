@extends('adminlte::page')

@section('title', 'Relatório de Acessos')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="" class="active">Relatório de Acessos</a></li>
    </ol>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Casa de festa</th>
                        <th>Representante</th>
                        <th>Dia/Hora</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($logs as $log)
                        <tr>
                            <td>
                                {{ $log->user->companyName }}
                            </td>
                            <td>
                                {{ $log->user->name }}
                            </td>
                            <td>
                                {{ $log->created_at }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@stop
