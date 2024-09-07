<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Facades\Auth;
use LaravelLegends\PtBrValidator\Rules\FormatoCpf;
use function Laravel\Prompts\error;
use Illuminate\Support\Facades\Log;

class VisitanteController extends Controller
{

    public function __construct()
    {
        $this->middleware('login')->except('index');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $visitors = Visitor::all();
        return view('visitante.index',['visitors' => $visitors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view("visitante.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'cpf' => ['required|max:11', new FormatoCpf()]
        ]);

        $created = Visitor::create([
             'name' => $request->input('name'),
             'cpf' => $request->input('cpf'),
             'created_by' => Auth::id(),
             'updated_by' => Auth::id()
         ]);
        $mensagem = 'sucesso';
         if(!$created){
            $mensagem = 'erro';
         }

        return view('visitante.create', compact('mensagem'));
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $visitante = Visitor::find($id);
        return(view('visitante.show', ['visitante' => $visitante]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $visitante = Visitor::find($id);

       return view('visitante.edit', ['visitante' => $visitante]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visitor $visitante)
    {

            $visitante->name = $request->input('name');
            $visitante->cpf = $request->input('cpf');
            $visitante->updated_by = Auth::id();
            $visitante->save();

        $mensagem = 'Sucesso';
        if(!$visitante){
            $mensagem = 'erro';
            Log::alert("Erro ao atualizar os dados", [$visitante->name]);
        }
        Log::info("Visitante atualizado com sucesso!", ['nome' => $visitante->name] );
        return to_route("visitante.index");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
