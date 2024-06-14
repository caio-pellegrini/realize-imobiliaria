<x-layout>
    <x-slot name="titulo">contato - Realize Imobiliária</x-slot>

    <div class="container mx-auto px-4 md:px-40 md:h-screen py-16 space-y-12">
        <!-- Título da Página -->
        <section class="text-center">
            <h1 class="text-4xl font-bold text-primary mb-4">Entre em contato Conosco</h1>
            <p class="text-lg text-gray-700">Preencha o formulário abaixo ou utilize nossas informações de contato para falar conosco.</p>
        </section>

        <!-- Formulário de contato -->
        <section class="bg-white p-8 rounded-lg shadow-lg">
            <form action="{{ route('enviar-contato') }}" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block text-lg font-medium text-gray-700">Nome</label>
                        <input type="text" name="name" id="name" required placeholder="Digite seu nome" class="mt-1 block w-full px-4 py-3 border border-gray-400 rounded-xl bg-gray-100 shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                    </div>
                    <div>
                        <label for="surname" class="block text-lg font-medium text-gray-700">Sobrenome</label>
                        <input type="text" name="surname" id="surname" required placeholder="Digite seu sobrenome" class="mt-1 block w-full px-4 py-3 border border-gray-400 rounded-xl bg-gray-100 shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="email" class="block text-lg font-medium text-gray-700">E-mail</label>
                        <input type="email" name="email" id="email" required placeholder="Digite seu e-mail" class="mt-1 block w-full px-4 py-3 border border-gray-400 rounded-xl bg-gray-100 shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                    </div>
                    <div>
                        <label for="phone" class="block text-lg font-medium text-gray-700">Telefone</label>
                        <input type="tel" name="phone" id="phone" placeholder="Digite seu telefone" class="mt-1 block w-full px-4 py-3 border border-gray-400 rounded-xl bg-gray-100 shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                    </div>
                </div>
                <div>
                    <label for="message" class="block text-lg font-medium text-gray-700">Mensagem</label>
                    <textarea name="message" id="message" rows="5" required placeholder="Digite sua mensagem" class="mt-1 block w-full px-4 py-3 border border-gray-400 rounded-xl bg-gray-100 shadow-sm focus:outline-none focus:ring-primary focus:border-primary"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="inline-block bg-primary text-white font-bold py-2 px-4 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">Enviar Mensagem</button>
                </div>
            </form>
        </section>
    </div>
</x-layout>
