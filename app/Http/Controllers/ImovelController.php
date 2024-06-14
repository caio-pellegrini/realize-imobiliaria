<?php

namespace App\Http\Controllers;

use App\Models\Imovel;
use Illuminate\Http\Request;

class ImovelController extends Controller
{
    /**
     * Display a listing of the resource.   
     */
    public function index()
    {
        $imoveis = Imovel::query()->paginate();
        return view('imoveis.index', compact('imoveis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('imoveis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $imovel = Imovel::find($id);
        return view('imoveis.show', ['imovel' => $imovel]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Imovel $imovel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Imovel $imovel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Imovel $imovel)
    {
        //
    }

    public function buscar(Request $request)
    {
        $query = Imovel::query();

        // Filtrar por tipo de negociação (venda/locação)
        if ($request->filled('tipo_negociacao')) {
            $query->where('tipo_negociacao', $request->input('tipo_negociacao'));
        }

        // Filtrar por localização (cidade, estado, bairro)
        if ($request->filled('localizacao')) {
            $query->where(function($q) use ($request) {
                $q->where('cidade', 'like', '%' . $request->input('localizacao') . '%')
                  ->orWhere('estado', 'like', '%' . $request->input('localizacao') . '%')
                  ->orWhere('bairro', 'like', '%' . $request->input('localizacao') . '%');
            });
        }

        // Filtrar por tipo de imóvel
        if ($request->filled('tipo')) {
            $query->where('tipo', $request->input('tipo'));
        }

        // Filtrar por preço
        if ($request->filled('preco')) {
            $query->where('preco', '<=', $request->input('preco'));
        }

        // Executar a consulta
        $imoveis = $query->get();

        // Retornar os resultados da busca (você pode retornar uma view específica com os resultados)
        return view('imoveis.resultados', compact('imoveis'));

        
    }

    public function comprar()
    {
        $imoveis = Imovel::where('tipo_negociacao', 'Venda')->get();
        return view('comprar', ['imoveis' => $imoveis, 'titulo' => 'Imóveis à Venda']);
    }

    public function alugar()
    {
        $imoveis = Imovel::where('tipo_negociacao', 'Locação')->get();
        return view('alugar', ['imoveis' => $imoveis, 'titulo' => 'Imóveis para Locação']);
    }

    
}
