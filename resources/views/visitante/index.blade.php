@extends('layouts.principal')
@section('content')
    <div class="card border-secondary" style="text-align: center;">



    <table class="table table-hover">
        <thead>
        <tr>
            <th><h2>Visitantes:</h2></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nome do visitante:</td>
                <td> </td>
                <td></td>
            </tr>
            @foreach ($visitors as $visitor)
                <tr>

                 <td>{{$visitor->name}} </td> <td> {{$visitor->created_at}} </td> <td> {{$visitor->updatedBy->name}}  </td> <td> <a href="{{route('visitante.show',['id' => $visitor->id])}}">Ver</a> </td> <td> <a href="{{route('visitante.edit',['id' => $visitor->id])}}">Editar</a> </td> <td> <a href="">Excluir</a> </li> </td>

                </tr>
            @endforeach


        </tbody>
    </table>
    </div>


@endsection
