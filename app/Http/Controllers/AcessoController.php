<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class AcessoController extends Controller
{
    public function index(){
        return view('acesso.index');
    }
}
