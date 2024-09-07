@extends('layouts.principal')
@section('content')
    <div class="card border-secondary" style="text-align: center; background-color: honeydew">

        <h3>Dados do Visitante:</h3>
        <h5>Nome: </h5><p>{{$visitante->name}}</p> <br>
        <h5>CPF: </h5><p>{{$visitante->cpf}}</p> <br>
        <h5>Criado por: </h5><p>{{$visitante->createdBy->username}}</p> <br>
        <h5>Atualizado por: </h5><p>{{$visitante->updatedBy->name}}</p>



    </div>
@endsection
