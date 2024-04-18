<?php

namespace App\Http\Controllers;

use App\Models\Professore;
use Illuminate\Http\Request;

class ProfessoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return inertia('Professores/index', [
            'professores' => Professore::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return inertia('Professores/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $salvou = Professore::create($request->all());
        if($salvou){
            return response()->json('Professor cadastrado com sucesso!');
        }else{
            return response()->json(['message' => 'Erro ao cadastrar Professor'],500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Professore $professore)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professore $professore)
    {
        //
        return inertia('Professores/edit', [
            'professores' => $professore
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Professore $professore)
    {
        //
        $aletrou = $professore->update($request->all());
        if($aletrou){
            return response()->json('Professor atualizado com sucesso!');
        }else{
            return response()->json(['message' => 'Erro ao atualizar Professor'],500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professore $professore)
    {
        //
        $deletou = $professore->delete();
        if($deletou){
            return response()->json('Professor removido com sucesso!');
        }else{
            return response()->json(['message' => 'Erro ao deletar Professor'],500);
        }
    }
}
