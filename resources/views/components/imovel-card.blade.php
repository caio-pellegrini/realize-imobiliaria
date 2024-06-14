@props(['titulo', 'bairro', 'preco', 'quartos', 'banheiros', 'garagem', 'imagem'])

<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <img src="{{ asset($imagem) }}" alt="Imagem do Imóvel" class="w-full h-48 object-cover">
    <div class="p-4">
        <h5 class="text-lg font-semibold">{{ $titulo }}</h5>
        <h6 class="text-gray-500 mb-2">{{ $bairro }}</h6>
        <p class="text-gray-700 font-bold text-xl mb-4">R$ {{ number_format($preco, 2, ',', '.') }}</p>
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between text-gray-600 mt-2 space-y-2 sm:space-y-0">
            <div class="flex items-center">
                <i class="fas fa-bath mr-1"></i> 
                <span>{{ $banheiros }} {{ $banheiros > 1 ? 'banheiros' : 'banheiro' }}</span>
            </div>
            <div class="flex items-center">
                <i class="fas fa-bed mr-1"></i> 
                <span>{{ $quartos }} {{ $quartos > 1 ? 'quartos' : 'quarto' }}</span>
            </div>
            <div class="flex items-center">
                <i class="fas fa-car mr-1"></i> 
                <span>{{ $garagem ?? 0 }} {{ $garagem > 1 ? 'vagas' : 'vaga' }}</span>
            </div>
        </div>
    </div>
</div>
