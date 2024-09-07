@extends('layouts.principal')
@section('content')
    <h1>Dashboard. Olá {{Auth::user()->name}}!</h1>
@endsection
