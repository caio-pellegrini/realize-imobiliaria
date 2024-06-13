<x-layout layout>
    <x-slot name="titulo">Quem Somos - Realize</x-slot>

    <div class="container mx-auto px-4 md:px-40 py-4 space-y-12">
        <!-- Section 1 -->
        <section class="flex flex-col lg:flex-row items-center space-y-4 lg:space-y-0 lg:space-x-8">
            <img src="{{ asset('assets/imgs/quem-somos/servicos.png') }}" alt="Section 1"
                class="w-full lg:w-1/2 rounded-lg order-2 lg:order-none">
            <div class="lg:w-1/2 space-y-4 lg:space-y-8 order-1 lg:order-none">
                <h2 class="text-3xl text-nowrap lg:text-4xl font-bold text-primary lg:mb-2">Seu novo lar começa aqui</h2>
                <p class="text-gray-800 text-xl lg:w-2/3 ">
                    A Realize é uma empresa que se destaca pela sua versatilidade no setor imobiliário. Oferecemos uma
                    ampla gama de serviços, se empenhando em atender diversas necessidades do mercado, desde corretora,
                    administradora e construtora.
                </p>
            </div>
        </section>

        <!-- Section 2 -->
        <section class="flex flex-col lg:flex-row items-center space-y-4 lg:space-y-0 lg:space-x-8">
            <div class="lg:w-1/2 space-y-4 lg:space-y-8 ">
                <h2 class="text-3xl lg:text-4xl  font-bold text-primary mb-2">Realizamos seu projeto do início ao fim</h2>
                <p class="text-gray-800 text-xl lg:w-4/5">
                    Como construtora, a Realize está envolvida no desenvolvimento de novos imóveis. Isso inclui a
                    construção de residências, edifícios comerciais ou projetos de grande escala, desde o planejamento e
                    design até a execução e construção final.
                </p>
            </div>
            <img src="{{ asset('assets/imgs/quem-somos/construtora.png') }}" alt="Section 2"
                class="w-full lg:w-1/2 rounded-lg order-1 lg:order-none">
        </section>

        <!-- Section 3 -->
        <section class="flex flex-col lg:flex-row items-center space-y-4 lg:space-y-0 lg:space-x-8">
            <img src="{{ asset('assets/imgs/quem-somos/corretora.png') }}" alt="Section 2"
                class="w-full lg:w-1/2 rounded-lg order-2 lg:order-none">
            <div class="lg:w-1/2 space-y-4 lg:space-y-8 order-1 lg:order-none">
                <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-2">Atendemos todas as suas necessidades imobiliárias.</h2>
                <p class="text-gray-800 text-xl lg:w-2/3">
                    Como corretora, a Realize oferece serviços relacionados ao assessoramento de clientes em
                    investimentos imobiliários. Incluindo análise de mercado, avaliação de propriedades e consultoria
                    financeira para a aquisição de imóveis.</p>
            </div>
        </section>

        <!-- Section 4 -->
        <section class="flex flex-col lg:flex-row items-center space-y-4 lg:space-y-0 lg:space-x-8">
            <div class="lg:w-1/2 space-y-4 lg:space-y-8">
                <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-2">Realizamos seu projeto do início ao fim</h2>
                <p class="text-gray-800 text-lg lg:text-xl lg:w-4/5">
                    Como construtora, a Realize está envolvida no desenvolvimento de novos imóveis. Isso inclui a
                    construção de residências, edifícios comerciais ou projetos de grande escala, desde o planejamento e
                    design até a execução e construção final.
                </p>
            </div>
            <img src="{{ asset('assets/imgs/quem-somos/construtora.png') }}" alt="Section 2"
                class="w-full lg:w-1/2 rounded-lg">
        </section>
    </div>



    <!-- Seção Anuncie seu Imóvel -->
    <div class="bg-primary mt-10 mx-auto px-8 md:px-52 py-16 space-y-12 text-white">
        <section class="flex flex-col lg:flex-row items-center justify-between lg:space-y-0 lg:space-x-48">
            <div class="lg:w-1/2 space-y-8">
                <x-application-logo></x-application-logo>
                <h2 class="text-5xl font-bold">Anuncie os seus imóveis conosco!</h2>
                <p class="text-xl">
                    Alcance novos clientes e gere novas oportunidades.
                </p>
            </div>
            <div class="lg:w-1/2 bg-white text-primary p-8 rounded-lg shadow-lg flex flex-col items-center">
                <h3 class="text-3xl font-bold mb-4">Anuncie seu imóvel</h3>
                <p class="text-lg mb-4">
                    Anuncie seu imóvel com a Realize e aproveite nossa experiência e rede de contatos para alcançar os melhores resultados.
                </p>
                <p class="text-lg mb-4">
                    Oferecemos <strong>avaliação precisa</strong>, estratégias de marketing eficazes e um atendimento personalizado para garantir que seu imóvel seja visto pelo público certo.
                </p>
                <a href="#" class="inline-block bg-primary text-white text-lg font-bold py-2 px-4 rounded hover:bg-blue-700">Anunciar</a>
            </div>
        </section>
    </div>

    <div class="container mx-auto px-4 md:px-40 py-4 space-y-12 h-[60vh] pt-16">
        <!-- Outras seções aqui... -->

        <!-- Seção de FAQ -->
        <section class="my-10 max-w-2xl mx-auto" x-data="{ openQuestion: null }">
            <h2 class="text-4xl font-bold text-primary mb-6 text-center">Dúvidas Frequentes</h2>
            
            <!-- Pergunta 1 -->
            <div class="border-b border-gray-200">
                <button class="w-full text-left px-4 py-3 text-lg font-medium text-gray-900 focus:outline-none"
                        @click="openQuestion === 1 ? openQuestion = null : openQuestion = 1">
                    <span>Quanto custa anunciar meu imóvel?</span>
                    <span class="float-right" x-show="openQuestion === 1">&minus;</span>
                    <span class="float-right" x-show="openQuestion !== 1">&plus;</span>
                </button>
                <div x-show="openQuestion === 1" class="px-4 py-3 text-gray-700">
                    Os custos podem variar dependendo do tipo de imóvel e dos serviços adicionais escolhidos. Entre em contato conosco para obter um orçamento detalhado.
                </div>
            </div>

            <!-- Pergunta 2 -->
            <div class="border-b border-gray-200">
                <button class="w-full text-left px-4 py-3 text-lg font-medium text-gray-900 focus:outline-none"
                        @click="openQuestion === 2 ? openQuestion = null : openQuestion = 2">
                    <span>Quais são os documentos necessários para anunciar meu imóvel?</span>
                    <span class="float-right" x-show="openQuestion === 2">&minus;</span>
                    <span class="float-right" x-show="openQuestion !== 2">&plus;</span>
                </button>
                <div x-show="openQuestion === 2" class="px-4 py-3 text-gray-700">
                    Geralmente, você precisará de documentos como escritura do imóvel, certidão de ônus reais, IPTU, entre outros. Nossa equipe ajudará você a reunir toda a documentação necessária.
                </div>
            </div>

            <!-- Pergunta 3 -->
            <div class="border-b border-gray-200">
                <button class="w-full text-left px-4 py-3 text-lg font-medium text-gray-900 focus:outline-none"
                        @click="openQuestion === 3 ? openQuestion = null : openQuestion = 3">
                    <span>Como a imobiliária promove meu imóvel?</span>
                    <span class="float-right" x-show="openQuestion === 3">&minus;</span>
                    <span class="float-right" x-show="openQuestion !== 3">&plus;</span>
                </button>
                <div x-show="openQuestion === 3" class="px-4 py-3 text-gray-700">
                    Utilizamos uma combinação de estratégias de marketing online e offline, incluindo anúncios em portais imobiliários, redes sociais, e-mail marketing e visitas guiadas.
                </div>
            </div>
        </section>
    </div>
</x-layout>
