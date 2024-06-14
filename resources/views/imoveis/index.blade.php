<x-layout>
    <x-slot name="titulo">Imóveis</x-slot>
    <div class="container mx-auto mt-4 px-4">
        <h1 class="text-2xl font-bold mb-4">Lista de Imóveis</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($imoveis as $imovel)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div id="image-carousel-{{ $imovel->id }}" class="splide" role="group" aria-label="Beautiful Images">
                        <div class="splide__track">
                            <ul class="splide__list">
                                @foreach (json_decode($imovel->imagens, true) as $imagem)
                                    <div class="splide__slide">
                                        <img src="{{ $imagem }}" alt="Imagem do Imóvel" class="w-full h-48 object-cover">
                                    </div>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="text-lg font-semibold">{{ $imovel->titulo }}</h5>
                        <h6 class="text-gray-500 mb-2">{{ $imovel->bairro }}</h6>
                        <p class="text-gray-700 font-bold text-xl">R$ {{ number_format($imovel->preco, 2, ',', '.') }}</p>
                        <div class="flex items-center justify-between text-gray-600 mt-2">
                            <span><i class="fas fa-bath"></i> {{ $imovel->banheiros }} banheiros</span>
                            <span><i class="fas fa-bed"></i> {{ $imovel->quartos }} quartos</span>
                            <span><i class="fas fa-car"></i> {{ $imovel->caracteristicas['garagem'] ?? 0 }} vagas</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Inicialize o Splide -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @foreach ($imoveis as $imovel)
                new Splide('#image-carousel-{{ $imovel->id }}', {
                    type   : 'loop',
                    perPage: 1,
                    autoplay: true,
                }).mount();
            @endforeach
        });
    </script>
</x-layout>
