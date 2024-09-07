@extends('layouts.principal')
@section('content')

    <div class="card border-secondary" >
        <div class="container-sm" style="width: fit-content;height: fit-content; " >

                <form action="{{route("visitante.store")}}" method="post">
                @csrf

                        <h1 style="text-align: center;">Cadastro de visitantes:</h1><br>
                        <label>Nome:</label><br><input class="form-control" type="text" name="name" placeholder="Nome Completo" required><br>
                    <span>{{$errors->first('name')}}</span><br>
                        <label>CPF:</label><br><input class="form-control" type="text" name="cpf" placeholder="CPF sem traços e pontos" maxlength="11" required><br>
                    <span>{{$errors->first('cpf')}}</span><br>
                        <button type="submit" class="btn btn-outline-success">Cadastrar</button>

                </form>

        </div>
    </div>

    @isset($mensagem) {{$mensagem}} @endisset

@endsection
