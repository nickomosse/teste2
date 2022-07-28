@extends('adminlte::page')

@section('title', 'Todas Avaliações')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="" class="active">Avaliações de {{$service->name}}</a></li>
    </ol>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="rating">Avaliação principal:</label>
                <textarea disabled name="rating" class="form-control" id="rating" rows="6">{{$mainRating->text}}</textarea>
            </div>
        </div>
    </div>
    <h4>Outras avaliações</h2>
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="rating">Avaliação de Anderson:</label>
                <textarea disabled name="rating" class="form-control" id="rating" rows="2">okok</textarea>
            </div>

            <div class="form-group">
                <label for="rating">Avaliação de Lucas:</label>
                <textarea disabled name="rating" class="form-control" id="rating" rows="2">okok</textarea>
            </div>

            <div class="form-group">
                <label for="rating">Avaliação de Rômulo:</label>
                <textarea disabled name="rating" class="form-control" id="rating" rows="2">okok</textarea>
            </div>
        </div>
    </div>
@stop
