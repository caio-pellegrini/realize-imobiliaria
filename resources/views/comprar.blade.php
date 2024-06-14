<x-layout>
    <x-slot name="titulo">Imóveis</x-slot>
    <div class="container mx-auto mt-4 md:px-32 md:space-y-12">
        
        <div class="flex justify-between items-center mb-6">
            <div>
                <label for="search" class="block text-gray-700">Você está procurando por imóveis para compra:</label>
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
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 ">
            <x-imovel-card 
                titulo="Casa à venda"
                bairro="Jardim Real Paraíso"
                preco="350000"
                quartos="3"
                banheiros="1"
                garagem="2"
                imagem="assets/imgs/comprar/1.png" 
            />

            <x-imovel-card 
                titulo="Casa à venda"
                bairro="Jardim Santa Rita"
                preco="515000"
                quartos="3"
                banheiros="2"
                garagem="2"
                imagem="assets/imgs/comprar/2.png" 
            />

            <x-imovel-card 
                titulo="Casa à venda"
                bairro="Jardim Tangará"
                preco="350000"
                quartos="3"
                banheiros="2"
                garagem="2"
                imagem="assets/imgs/comprar/3.png" 
            />

            <x-imovel-card 
                titulo="Casa à venda"
                bairro="Jardim Amélia"
                preco="200000"
                quartos="2"
                banheiros="1"
                garagem="1"
                imagem="assets/imgs/comprar/4.png" 
            />

            <x-imovel-card 
                titulo="Casa à venda"
                bairro="Jardim Jaqueline"
                preco="300000"
                quartos="2"
                banheiros="1"
                garagem="2"
                imagem="assets/imgs/comprar/5.png" 
            />

            <x-imovel-card 
                titulo="Casa à venda"
                bairro="Jardim Bela Vista"
                preco="450000"
                quartos="5"
                banheiros="2"
                garagem="1"
                imagem="assets/imgs/comprar/6.png" 
            />

            <x-imovel-card 
                titulo="Casa à venda"
                bairro="Vila Municipal"
                preco="150000"
                quartos="3"
                banheiros="1"
                garagem="1"
                imagem="assets/imgs/comprar/7.png" 
            />

            <x-imovel-card 
                titulo="Casa à venda"
                bairro="Jd. São Cristóvão"
                preco="390000"
                quartos="3"
                banheiros="1"
                garagem="1"
                imagem="assets/imgs/comprar/8.png" 
            />

            <x-imovel-card 
                titulo="Casa à venda"
                bairro="Jardim São Luíz"
                preco="480000"
                quartos="1"
                banheiros="1"
                garagem="1"
                imagem="assets/imgs/comprar/9.png" 
            />
        </div>
    </div>
</x-layout>
