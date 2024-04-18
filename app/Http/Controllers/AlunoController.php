<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //return view('Aluno/index');
        $alunos = Aluno::all();
        return Inertia::render('Aluno/index',compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return Inertia::render('Aluno/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $aluno = Aluno::create($request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'genero' => 'required|string|max:20',
            'data_nascimento' => 'required|date',
            'morada' => 'required|string|max:255',
            'telefone' => 'required|integer|max:999999999|min:900000000',
            'telefoneAlt' => 'required|integer|max:999999999|min:900000000',
        ]));
        if ($aluno) {
            return response()->json($aluno);
        }
        else{
            return response()->json(['message' => 'Erro ao criar aluno'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Aluno $aluno)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aluno $aluno)
    {
        //
        //return($aluno);
        //$aluno = Aluno::all();
        return Inertia::render('Aluno/edit',compact('aluno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aluno $aluno)
    {
        //
        $alterou = $aluno->update($request->all());
        if($alterou){
            return response()->json('Editado com sucesso');
        }else{
            return response()->json(['message'=>'Erro ao editar aluno'],500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aluno $aluno)
    {
        //
        $deletou = $aluno->delete();
        if($deletou){
            return response()->json('Eliminado');
        }else{
            return response()->json(['message'=>'Erro ao eliminar'],500);
        }
    }

}
