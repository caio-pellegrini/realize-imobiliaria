<x-layout>
    <x-slot name="titulo">Imóveis para Locação</x-slot>
    <div class="container mx-auto mt-4 px-4  md:px-32 md:space-y-12">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-6">
            <div class="mb-4 sm:mb-0">
                <label for="search" class="block text-gray-700">Você está procurando por imóveis para alugar:</label>
                <div class="relative mt-2">
                    <input type="text" id="search" name="search" placeholder="Procure aqui..." class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <i class="fas fa-search absolute right-3 top-3 text-gray-400"></i>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <button class="bg-gray-100 border border-gray-300 px-4 py-2 rounded-lg flex items-center">
                    <i class="fas fa-filter mr-2"></i> Filtrar
                </button>
                <div>
                    <label for="order" class="block text-gray-700">Ordenar por:</label>
                    <select id="order" name="order" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option>Padrão...</option>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <x-imovel-card 
                titulo="Locação"
                bairro="Jd. São Guilherme"
                preco="1200"
                quartos="3"
                banheiros="1"
                garagem="1"
                imagem="assets/imgs/locacao/1.png" 
            />

            <x-imovel-card 
                titulo="Locação"
                bairro="Jardim Alvorada"
                preco="1000"
                quartos="2"
                banheiros="2"
                garagem="2"
                imagem="assets/imgs/locacao/2.png" 
            />

            <x-imovel-card 
                titulo="Locação"
                bairro="Jd. São Francisco"
                preco="980"
                quartos="2"
                banheiros="2"
                garagem="2"
                imagem="assets/imgs/locacao/3.png" 
            />

            <x-imovel-card 
                titulo="Locação"
                bairro="Jardim Alvorada"
                preco="900"
                quartos="2"
                banheiros="1"
                garagem="2"
                imagem="assets/imgs/locacao/4.png" 
            />

            <x-imovel-card 
                titulo="Locação"
                bairro="Jd. Santa Júlia"
                preco="900"
                quartos="2"
                banheiros="1"
                garagem="1"
                imagem="assets/imgs/locacao/5.png" 
            />

            <x-imovel-card 
                titulo="Locação"
                bairro="Jardim Tangará"
                preco="900"
                quartos="2"
                banheiros="1"
                garagem="1"
                imagem="assets/imgs/locacao/6.png" 
            />

            <x-imovel-card 
                titulo="Locação"
                bairro="Jardim Tangará"
                preco="980"
                quartos="2"
                banheiros="1"
                garagem="1"
                imagem="assets/imgs/locacao/7.png" 
            />

            <x-imovel-card 
                titulo="Locação"
                bairro="Centro"
                preco="1400"
                quartos="3"
                banheiros="1"
                garagem="0"
                imagem="assets/imgs/locacao/8.png" 
            />

            <x-imovel-card 
                titulo="Locação"
                bairro="São Francisco"
                preco="1250"
                quartos="3"
                banheiros="1"
                garagem="1"
                imagem="assets/imgs/locacao/9.png" 
            />
        </div>
    </div>
</x-layout>
