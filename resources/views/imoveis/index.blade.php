<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Imóveis</title>
    <!-- Inclua o CSS do Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Lista de Imóveis</h1>
        <div class="row">
            @foreach ($imoveis as $imovel)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $imovel->titulo }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $imovel->tipo }}</h6>
                            <p class="card-text">
                                <strong>ID:</strong> {{ $imovel->id }}<br>
                                <strong>Descrição:</strong> {{ $imovel->descricao }}<br>
                                <strong>Preço:</strong> {{ $imovel->preco }}<br>
                                <strong>Endereço:</strong> {{ $imovel->logradouro }}<br>
                                <strong>Bairro:</strong> {{ $imovel->bairro }}<br>
                                <strong>Cidade:</strong> {{ $imovel->cidade }}<br>
                                <strong>Estado:</strong> {{ $imovel->estado }}<br>
                                <strong>CEP:</strong> {{ $imovel->cep }}<br>
                                <strong>Quartos:</strong> {{ $imovel->quartos }}<br>
                                <strong>Banheiros:</strong> {{ $imovel->banheiros }}<br>
                                <strong>Área do Terreno:</strong> {{ $imovel->area_terreno }} m²<br>
                                <strong>Área Construída:</strong> {{ $imovel->area_construida }} m²<br>
                                <strong>Status:</strong> {{ $imovel->status }}<br>
                                <strong>Tipo de Negociação:</strong> {{ $imovel->tipo_negociacao }}<br>
                                <strong>Características:</strong>
                                <ul>
                                    @foreach (json_decode($imovel->caracteristicas, true) as $key => $value)
                                        <li>{{ ucfirst($key) }}: {{ is_bool($value) ? ($value ? 'Sim' : 'Não') : $value }}</li>
                                    @endforeach
                                </ul>
                                <strong>Imagens:</strong>
                                <div class="image-gallery">
                                    @foreach (json_decode($imovel->imagens, true) as $imagem)
                                        <img src="{{ $imagem }}" alt="Imagem do Imóvel" class="img-fluid mb-2">
                                    @endforeach
                                </div>
                                <strong>Criado em:</strong> {{ $imovel->created_at }}<br>
                                <strong>Atualizado em:</strong> {{ $imovel->updated_at }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Inclua o JS do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
