@extends('adminlte::page')

@section('title', 'Casa de festa')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="" class="active">Mensagem personalizada</a></li>
    </ol>
@stop

@section('content')
    <div class="row">

        <div class="col-sm-6 mx-auto">
            <h1 class="text-center py-4">Mensagem personalizada:</h1>
            <div class="card mx-auto text-center">
                <div class="card-body">
                    <p class="h5">Texto a ser enviado:</p>
                    <hr>
                    <form action="{{route('messages.update')}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-sm-8 mx-auto mt-2">
                            <p>Olá, #casadefesta</p>
                            <textarea name="message" class="form-control" cols="30" rows="10" required>
                                {{$message->text}}
                            </textarea>
                        </div>
                        <hr>
                        <button class="btn btn-success" type="submit">Salvar</button>
                    </form>


                </div>

            </div>
        </div>
    </div>

@stop
