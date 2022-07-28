@extends('adminlte::page')

@section('title', 'Painel principal')

@section('content_header')
    <h1>Dashboard</h1>
@endsection

<style>
    /* h1 {
        color: blue !important;
    }
    .tipo.tipu {
        color: blue;
    } */
</style>

@section('content')
<div class="row">
    <div class="col-lg-3 col-6">

    <div class="small-box bg-info">
    <div class="inner">
    <h3>{{$qtdUsers}}</h3>
    <p style="font-size: 28px">Casas cadastradas</p>
    </div>
    <div class="icon">
    <i class="fas fa-shopping-cart"></i>
    </div>
    <a href="{{route('users.index')}}" class="small-box-footer">
    Mais informações <i class="fas fa-arrow-circle-right"></i>
    </a>
    </div>
    </div>

    <div class="col-lg-3 col-6">

    <div class="small-box bg-success">
    <div class="inner">
    <h3>{{$qtdServices}}</h3>
    <p style="font-size: 28px">Indicações realizadas</p>
    </div>
    <div class="icon">
    <i class="fas fa-user-plus"></i>
    </div>
    <a href="{{route('services.index')}}" class="small-box-footer">
    Mais informações <i class="fas fa-arrow-circle-right"></i>
    </a>
    </div>
    </div>

    <div class="col-lg-3 col-6">

    <div class="small-box bg-warning">
    <div class="inner">
    <h3>{{$qtdServiceTypes}}</h3>
    <p style="font-size: 28px">Tipos de serviço</p>
    </div>
    <div class="icon">
    <i class="fas fa-user-plus"></i>
    </div>
    <a href="{{route('servicetypes.index')}}" class="small-box-footer">
    Mais informações <i class="fas fa-arrow-circle-right"></i>
    </a>
    </div>
    </div>

    <div class="col-lg-3 col-6">

    <div class="small-box bg-danger">
    <div class="inner">
    <h3>{{$qtdAccessLogs}}</h3>
    <p style="font-size: 28px">Acessos na semana</p>
    </div>
    <div class="icon">
    <i class="fas fa-chart-pie"></i>
    </div>
    <a href="{{route('logs.index')}}" class="small-box-footer">
    Mais informações <i class="fas fa-arrow-circle-right"></i>
    </a>
    </div>
    </div>

    </div>
    <div class="card">
        <div class="card-header">
            <h2>Últimos acessos</h2>
        </div>
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
                    @foreach ($accessLogs as $log)
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
@endsection
