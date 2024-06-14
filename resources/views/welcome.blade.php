<x-layout>
    <x-slot name="titulo">Realize Empreendimentos</x-slot>

    <div class="container mx-auto md:px-32 space-y-12">
        <!-- Hero Section -->
        <section
            class="relative flex flex-col lg:flex-row justify-center items-center text-white p-10 rounded-lg imagemfundo">
            <img src="{{ asset('assets/imgs/hero.png') }}" alt="Family" class="rounded-lg">
            <div
                class="lg:absolute lg:bottom-20 lg:right-16 sm:flex flex-col lg:flex-row justify-between items-center lg:p-8 w-full lg:w-auto">
                <div data-aos="fade-up"
                    class="bg-white text-black p-4 rounded-lg shadow-md mt-6 lg:mt-0 lg:max-w-md w-full">
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
            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 ">
                        <li class="splide__slide">
                            <x-imovel-card titulo="Imóvel à venda" bairro="Jardim Real Paraíso" preco="350000" quartos="3"
                            banheiros="1" garagem="2" imagem="assets/imgs/imoveis/casa1.png" />
                        </li>
                        <li class="splide__slide">
                            <x-imovel-card titulo="Locação" bairro="São Cristóvão" preco="700" quartos="2" banheiros="1"
                    garagem="1" imagem="assets/imgs/imoveis/casa2.png" />
                        </li>
                        <li class="splide__slide"><x-imovel-card titulo="Casa recém-construída à venda" bairro="Jardim Primavera" preco="300000"
                            quartos="2" banheiros="2" garagem="1" imagem="assets/imgs/imoveis/casa3.png" /></li>
                       
                        <li class="splide__slide"><x-imovel-card titulo="Locação" bairro="Jardim Laranjeiras" preco="1300"
                            quartos="3" banheiros="2" garagem="1" imagem="assets/imgs/imoveis/casa3.png" /></li>
                    </ul>
                </div>
                <!-- Property Card -->
        
                <!-- Repeat similar blocks for other properties -->
            </div>
        </section>

        <!-- Service Section -->
        <section class="text-center py-8">
            <h2 class="text-3xl font-bold text-primary">Viver seu imóvel é mais fácil com a gente</h2>
            <p class="text-gray-500 mb-8">Conte com nosso suporte para melhorar a sua experiência e encontrar seu imóvel
                mais rápido.</p>
            <div class="grid sm:grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-md p-6 text-left" data-aos="fade-right">
                    <div class="flex items-center space-x-4 mb-4">
                        <i class="fa-solid fa-house-user fa-xl"></i>
                        <h3 class="text-xl font-bold">Tranquilidade para comprar o seu imóvel</h3>
                    </div>
                    <p class="text-gray-700 mb-4">Cuidamos de todo o processo para você focar apenas no que importa.</p>
                    <a href="#" class="text-secondary font-bold hover:underline">Buscar um imóvel</a>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow-md p-6 text-left" data-aos="fade-up">
                    <div class="flex items-center space-x-4 mb-4">
                        <i class="fa-solid fa-house-circle-check fa-xl"></i>
                        <h3 class="text-xl font-bold">Encontre o espaço ideal para o seu negócio</h3>
                    </div>
                    <p class="text-gray-700 mb-4">Nossa consultoria especializada cuida da busca do ponto de venda ideal
                        para você.</p>
                    <a href="{{ route('quem-somos') }}" class="text-secondary font-bold hover:underline">Saiba Mais</a>
                </div>
                <!-- Card 3 -->
                <div class="bg-white rounded-lg shadow-md p-6 text-left" data-aos="fade-left">
                    <div class="flex items-center space-x-4 mb-4">
                        <i class="fa-regular fa-handshake fa-xl"></i>
                        <h3 class="text-xl font-bold">Anuncie grátis com a gente</h3>
                    </div>
                    <p class="text-gray-700 mb-4">Evite dores de cabeça! Anunciar com a Realize é simples e rápido.</p>
                    <a href="{{ route('anunciar') }}" class="text-secondary font-bold hover:underline">Quero Anunciar</a>
                </div>
            </div>
        </section>


        {{-- carrosel --}}
        {{-- <section class="splide" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">Slide 01</li>
                    <li class="splide__slide">Slide 02</li>
                    <li class="splide__slide">Slide 03</li>
                    <li class="splide__slide">Slide 04</li>
                </ul>
            </div>
        </section> --}}

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
        if (window.innerWidth < 640) {
            var splide = new Splide('.splide', {
            type: 'loop',
            perPage: 1,
            perMove: 1,
            autoPlay: true,
            });
        } else {
            var splide = new Splide('.splide', {
            type: 'loop',
            perPage: 3,
            perMove: 1,
            autoPlay: true,
            });
        }
        

        splide.mount();
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</x-layout>
