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
            <section>

                <a class="img mx-auto d-block" href="{{route('messages.index')}}">
                    <img class="img mx-auto d-block" src="{!! asset('img/storesuccess2.png')!!}" alt="">
                </a>

            </section>

            </div>
        </div>
    </div>

@stop
