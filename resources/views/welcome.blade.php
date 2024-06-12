<x-layout>
    <x-slot name="titulo">Realize Empreendimentos</x-slot>

    <div class="container mx-auto px-32 space-y-12">
        <!-- Hero Section -->
        <section
            class="relative flex flex-col lg:flex-row justify-center items-center text-white p-10 rounded-lg imagemfundo">
            <img src="{{ asset('assets/imgs/hero.png') }}" alt="Family" class="rounded-lg">
            <div
                class="lg:absolute lg:bottom-16 lg:right-44 sm:flex flex-col lg:flex-row justify-between items-center lg:p-8 w-full lg:w-auto">
                <div class="bg-white text-black p-4 rounded-lg shadow-md mt-6 lg:mt-0 lg:max-w-md w-full">
                    <form method="GET" action="{{ route('imoveis.buscar') }}">
                        <p class="text-lg font-semibold mb-2">Encontre em poucos cliques o seu imóvel ideal</p>
                        <div class="flex items-center space-x-2 mb-4">
                            <input type="radio" id="alugar" name="tipo_negociacao" value="Locação"
                                class="mr-1"><label for="alugar">Alugar</label>
                            <input type="radio" id="comprar" name="tipo_negociacao" value="Venda"
                                class="mr-1"><label for="comprar">Comprar</label>
                        </div>
                        <input type="text" name="localizacao" placeholder="Onde?"
                            class="w-full mb-2 p-2 border rounded">
                        <select name="tipo" class="w-full mb-2 p-2 border rounded">
                            <option value="">Tipo de imóvel</option>
                            <option value="Casa">Casa</option>
                            <option value="Apartamento">Apartamento</option>
                            <option value="Comercio">Comércio</option>
                            <option value="Terreno">Terreno</option>
                        </select>
                        <input type="text" name="preco" placeholder="Aluguel/Valor até"
                            class="w-full mb-2 p-2 border rounded">
                        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Buscar Imóvel</button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Property Listings -->
        <section>
            <h2 class="text-3xl font-bold text-center text-primary mb-4">Imóveis do jeito que você procura</h2>
            <p class="text-center mb-8">Selecionamos novas oportunidades com as características que você busca.</p>
            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Property Card -->
                <div class="bg-white rounded-lg shadow-md p-4">
                    <img src="{{ asset('assets/imgs/property1.png') }}" alt="Property 1"
                        class="w-full h-48 object-cover rounded-md mb-4">
                    <div class="text-center">
                        <h3 class="text-xl font-bold">Casa para alugar</h3>
                        <p>Jardim Real Paraíso</p>
                        <p class="text-primary text-xl font-bold">R$ 1.500,00</p>
                        <div class="flex justify-center space-x-2 mt-2">
                            <span>2 banheiros</span>
                            <span>4 quartos</span>
                            <span>2 vagas</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md p-4">
                    <img src="{{ asset('assets/imgs/property1.png') }}" alt="Property 1"
                        class="w-full h-48 object-cover rounded-md mb-4">
                    <div class="text-center">
                        <h3 class="text-xl font-bold">Casa para alugar</h3>
                        <p>Jardim Real Paraíso</p>
                        <p class="text-primary text-xl font-bold">R$ 1.500,00</p>
                        <div class="flex justify-center space-x-2 mt-2">
                            <span>2 banheiros</span>
                            <span>4 quartos</span>
                            <span>2 vagas</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md p-4">
                    <img src="{{ asset('assets/imgs/property1.png') }}" alt="Property 1"
                        class="w-full h-48 object-cover rounded-md mb-4">
                    <div class="text-center">
                        <h3 class="text-xl font-bold">Casa para alugar</h3>
                        <p>Jardim Real Paraíso</p>
                        <p class="text-primary text-xl font-bold">R$ 1.500,00</p>
                        <div class="flex justify-center space-x-2 mt-2">
                            <span>2 banheiros</span>
                            <span>4 quartos</span>
                            <span>2 vagas</span>
                        </div>
                    </div>
                </div>
                <!-- Repeat similar blocks for other properties -->
            </div>
        </section>

        <!-- Service Section -->
        <section class="text-center py-8">
            <h2 class="text-3xl font-bold text-blue-500">Viver seu imóvel é mais fácil com a gente</h2>
            <p class="text-gray-500 mb-8">Conte com nosso suporte para melhorar a sua experiência e encontrar seu imóvel
                mais rápido.</p>
            <div class="grid sm:grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-md p-6 text-left">
                    <div class="flex items-center space-x-4 mb-4">
                        <img src="{{ asset('assets/icons/house-icon.png') }}"
                            alt="Tranquilidade para comprar o seu imóvel" class="w-10 h-10">
                        <h3 class="text-xl font-bold">Tranquilidade para comprar o seu imóvel</h3>
                    </div>
                    <p class="text-gray-700 mb-4">Cuidamos de todo o processo para você focar apenas no que importa.</p>
                    <a href="#" class="text-blue-500 font-bold">Buscar um imóvel</a>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow-md p-6 text-left">
                    <div class="flex items-center space-x-4 mb-4">
                        <img src="{{ asset('assets/icons/business-icon.png') }}"
                            alt="Encontre o espaço ideal para o seu negócio" class="w-10 h-10">
                        <h3 class="text-xl font-bold">Encontre o espaço ideal para o seu negócio</h3>
                    </div>
                    <p class="text-gray-700 mb-4">Nossa consultoria especializada cuida da busca do ponto de venda ideal
                        para você.</p>
                    <a href="#" class="text-blue-500 font-bold">Saiba Mais</a>
                </div>
                <!-- Card 3 -->
                <div class="bg-white rounded-lg shadow-md p-6 text-left">
                    <div class="flex items-center space-x-4 mb-4">
                        <img src="{{ asset('assets/icons/ads-icon.png') }}" alt="Anuncie grátis com a gente"
                            class="w-10 h-10">
                        <h3 class="text-xl font-bold">Anuncie grátis com a gente</h3>
                    </div>
                    <p class="text-gray-700 mb-4">Evite dores de cabeça! Anunciar com a Realize é simples e rápido.</p>
                    <a href="#" class="text-blue-500 font-bold">Quero Anunciar</a>
                </div>
            </div>
        </section>

    </div>

    <x-whastapp-btn></x-whastapp-btn>
</x-layout>
