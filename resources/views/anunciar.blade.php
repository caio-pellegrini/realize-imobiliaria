<x-layout>
    <x-slot name="titulo">Anunciar Imóvel - Realize Imobiliária</x-slot>

    <div class="container mx-auto px-4 md:px-40 py-12 space-y-12">
        <!-- Título da Página -->
        <section class="text-center">
            <h1 class="text-3xl lg:text-4xl font-bold text-primary mb-4">Anuncie o seu imóvel com a Realize!</h1>
            <p class="text-lg text-gray-700 max-w-2xl mx-auto">Aqui você mesmo cadastra o seu imóvel para vender ou
                alugar de forma simples, rápida, digital e sem pagar nada. Perfeito, não é?</p>
        </section>

        <section class="flex flex-col lg:flex-row items-center justify-around space-y-4 lg:space-y-0 lg:space-x-6">
            <div data-aos="fade-right"
                class="lg:w-2/3 space-y-4 lg:space-y-8 order-1 lg:order-none bg-gray-300 px-4 py-3 md:px-8 md:py-6 rounded-lg max-w-2xl">
                <h2 class="text-2xl font-bold text-primary mb-6">São apenas 3 passos:</h2>
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div
                            class="bg-secondary  rounded-full h-8 md:h-10 w-8 md:w-10 flex items-center justify-center font-bold mr-4 shrink-0">
                            1</div>
                        <div>
                            <h3 class="text-xl font-bold">Cadastre o seu imóvel</h3>
                            <p>Preencha nosso formulário com todas as informações necessárias.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div
                            class="bg-secondary rounded-full h-8 md:h-10 w-8 md:w-10 flex items-center justify-center font-bold mr-4 shrink-0">
                            2</div>
                        <div>
                            <h3 class="text-xl font-bold">Contato do consultor</h3>
                            <p>Nossa equipe entrará em contato para agendar as fotos, tour 360º e vídeos.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div
                            class="bg-secondary rounded-full h-8 md:h-10 w-8 md:w-10 flex items-center justify-center font-bold mr-4 shrink-0 ">
                            3</div>
                        <div>
                            <h3 class="text-xl font-bold">Anúncio no ar</h3>
                            <p>O seu imóvel estará em nosso site e principais portais imobiliários.</p>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('assets/imgs/anunciar/anunciar1.png') }}" alt="Anuncie seu imóvel"
                class="mx-auto md:w-1/4 rounded-lg" data-aos="fade-left">

        </section>

        <!-- Formulário de Cadastro de Imóvel -->
        <section class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-primary text-center mb-6">Comece agora mesmo o seu cadastro!</h2>
            <form action="{{ route('imoveis.anunciar') }}" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block text-lg font-medium text-gray-700">Nome</label>
                        <input type="text" name="name" id="name" required placeholder="Digite seu nome"
                            class="mt-1 block w-full px-4 py-3 border border-gray-400 rounded-xl bg-gray-100 shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                    </div>
                    <div>
                        <label for="phone" class="block text-lg font-medium text-gray-700">Telefone</label>
                        <input type="tel" name="phone" id="phone" required placeholder="Digite seu telefone"
                            class="mt-1 block w-full px-4 py-3 border border-gray-400 rounded-xl bg-gray-100 shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="email" class="block text-lg font-medium text-gray-700">E-mail</label>
                        <input type="email" name="email" id="email" required placeholder="Digite seu e-mail"
                            class="mt-1 block w-full px-4 py-3 border border-gray-400 rounded-xl bg-gray-100 shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                    </div>
                    <div>
                        <label for="cpf" class="block text-lg font-medium text-gray-700">CPF</label>
                        <input type="text" name="cpf" id="cpf" required placeholder="Digite seu CPF"
                            class="mt-1 block w-full px-4 py-3 border border-gray-400 rounded-xl bg-gray-100 shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="cep" class="block text-lg font-medium text-gray-700">CEP</label>
                        <input type="text" name="cep" id="cep" required placeholder="Digite seu CEP"
                            class="mt-1 block w-full px-4 py-3 border border-gray-400 rounded-xl bg-gray-100 shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                        <a href="https://buscacepinter.correios.com.br/app/endereco/index.php" class="text-primary text-sm font-bold mt-2 inline-block hover:underline ">Não sabe seu CEP?
                            Clique aqui</a>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="endereco" class="block text-lg font-medium text-gray-700">Endereço</label>
                        <input type="text" name="endereco" id="endereco" required placeholder="Endereço do imóvel"
                            class="mt-1 block w-full px-4 py-3 border border-gray-400 rounded-xl bg-gray-100 shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                    </div>
                    <div>
                        <label for="numero" class="block text-lg font-medium text-gray-700">Número</label>
                        <input type="text" name="numero" id="numero" required placeholder="Nº do imóvel"
                            class="mt-1 block w-full px-4 py-3 border border-gray-400 rounded-xl bg-gray-100 shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="bairro" class="block text-lg font-medium text-gray-700">Bairro</label>
                        <input type="text" name="bairro" id="bairro" required placeholder="Bairro do imóvel"
                            class="mt-1 block w-full px-4 py-3 border border-gray-400 rounded-xl bg-gray-100 shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                    </div>
                    <div>
                        <label for="complemento" class="block text-lg font-medium text-gray-700">Complemento</label>
                        <input type="text" name="complemento" id="complemento" placeholder="Complemento do imóvel"
                            class="mt-1 block w-full px-4 py-3 border border-gray-400 rounded-xl bg-gray-100 shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit"
                        class="inline-block bg-primary text-white font-bold py-2 px-4 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">Anunciar</button>
                </div>
            </form>
        </section>

        <section class="container mx-auto px-4 md:px-40 py-12 space-y-8">
            <h2 class="text-center text-3xl font-bold text-primary mb-6">Motivos para fechar negócio com a gente</h2>
            <div class="space-y-4">
                <div class="flex items-center border border-primary rounded-lg p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mr-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <p class="text-lg text-primary">Intermediação para todos os tipos de imóveis: residenciais ou
                        comerciais;</p>
                </div>
                <div class="flex items-center border border-primary rounded-lg p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mr-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <p class="text-lg text-primary">Apoio de profissionais capacitados nas visitas dos pretendentes ao
                        imóvel;</p>
                </div>
                <div class="flex items-center border border-primary rounded-lg p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mr-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <p class="text-lg text-primary">Segurança, rapidez e simplicidade em todas as etapas do processo de
                        aluguel ou venda;</p>
                </div>
            </div>
        </section>

    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
</x-layout>
