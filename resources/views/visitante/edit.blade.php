@extends('layouts.principal')
@section('content')
    <div class="card border-secondary" >
        <div class="container-sm" style="width: fit-content;height: fit-content; " >

            <form action="{{route('visitante.update',['visitante' => $visitante])}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <h1 style="text-align: center;">Editar visitante</h1><br>
                <label>Nome:</label><br><input class="form-control" type="text" name="name" placeholder="Nome Completo" value="{{$visitante->name}}" required><br><br>
                <label>CPF:</label><br><input class="form-control" type="text" name="cpf" value="{{$visitante->cpf}}" placeholder="CPF sem traços e pontos" maxlength="11" required><br><br>
                <button type="submit" class="btn btn-outline-success">Editar</button>

            </form>

        </div>
    </div>
@endsection
