<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados da Busca</title>
</head>
<body>
    <div class="container mx-auto md:px-10 lg:px-20 px-4 space-y-12">
        <h1 class="text-2xl font-semibold mb-6">Resultados da Busca</h1>
        @if($imoveis->isEmpty())
            <p>Nenhum imóvel encontrado.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($imoveis as $imovel)
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h2 class="text-xl font-semibold mb-2">{{ $imovel->titulo }}</h2>
                        <p>{{ $imovel->descricao }}</p>
                        <p><strong>Preço:</strong> R$ {{ number_format($imovel->preco, 2, ',', '.') }}</p>
                        <p><strong>Localização:</strong> {{ $imovel->cidade }}, {{ $imovel->estado }}</p>
                        <p><strong>Tipo:</strong> {{ $imovel->tipo }}</p>
                        <p><strong>Status:</strong> {{ $imovel->status }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</body>
</html>
