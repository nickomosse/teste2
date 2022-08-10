@extends('adminlte::page')

@section('title', "casa de festa")

@section('content_header')
    <h1>Nova casa de festa</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('users.store')}}" class="form" method="POST">
                @csrf

                @if ($errors->any())
                    {{dd($errors)}}
                @endif
                <div class="form-group">
                    <label for="companyName">Nome da empresa</label>
                    <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Empresa do Tutú" value="{{old('companyName')}}">
                </div>
                <div class="form-group">
                    <label for="name">Nome do dono</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Artur Santos" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="artursantos@trambique.com" value="{{old('email')}}" >
                </div>
                <div class="form-group">
                    <label for="adress">Endereço</label>
                    <input type="text" class="form-control" id="adress" name="adress" placeholder="Rua do Leme, 171" value="{{old('adress')}}">
                </div>
                <div class="form-group">
                    <label for="phone">Telefone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="21171717171" value="{{old('phone')}}">
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Salvar</button>
                </div>
            </form>

        </div>
    </div>
@endsection
