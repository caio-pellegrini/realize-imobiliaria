<footer class="bg-primary text-white px-4 md:px-40 py-8">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
        <!-- Logo e Direitos Reservados -->
        <div class="flex flex-col items-center md:items-start text-center md:text-left">
            <x-application-logo class="w-24 h-24"></x-application-logo>
            <p class="mt-4">&copy; 2024 | Todos os Direitos Reservados.</p>
        </div>
        
        <!-- Contato -->
        <div class="flex flex-col items-center md:items-start text-center md:text-left space-y-2">
            <h3 class="text-lg font-semibold mb-2">Contato</h3>

            <a href="{{ route('contato') }}" class="space-x-2"><i class="fas fa-lg fa-phone-alt"></i><span class="hover:underline">+55 (16) 3242-1704</span></a>
            <a href="mailto:realizama@gmail.com" class="space-x-2"><i class="far fa-lg fa-envelope"></i><span class="hover:underline">realizema@gmail.com</span></a>
            <a href="https://www.instagram.com/realizemontealto/" class="space-x-2"><i class="fab fa-lg fa-instagram"></i><span class="hover:underline">@realizemontealto</span></a>
            <a href="https://www.facebook.com/carvalhoaugusto2020" class="space-x-2"><i class="fab fa-lg fa-facebook"></i><span class="hover:underline">@realizemontealto</span></a>
        </div>
        
        <!-- Localização -->
        <div class="flex flex-col items-center md:items-start text-center md:text-left">
            <h3 class="text-lg font-semibold mb-4">Localização</h3>
            <p>Rua Jeremias De Paula Eduardo N° 1320</p>
            <p>Centro</p>
            <p>Monte Alto - SP</p>
            <p>CEP 15910-000</p>
        </div>
    </div>
</footer>
