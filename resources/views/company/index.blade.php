<x-app-layout>

    <input type="text" id="searchInput" placeholder="Recherche...">
    <div id="searchResults"></div>

    <h1 class="text-center text-4xl font-bold text-blue-900 mb-8">Explorez les entreprises</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8" id="entrepriseContainer">
        @foreach ($entreprises as $entreprise)
            <div class="entreprise-card bg-white shadow-md rounded-md p-6" data-nom="{{ $entreprise->nom }}">
                <div class="flex justify-center mb-4">
                    <img src="{{ asset('storage/' . $entreprise->logo) }}" alt="Logo"
                        class="w-24 h-24 md:w-32 md:h-32 rounded-full border-4 border-blue-500">
                </div>
                <div class="text-center mb-4">
                    <h2 class="text-lg font-semibold text-blue-900">{{ $entreprise->nom }}</h2>
                    <p class="text-sm text-gray-600">{{ $entreprise->slogan }}</p>
                </div>
                <div class="text-center mb-4">
                    <i class="fas fa-user text-blue-500"></i>
                    <p class="text-sm text-gray-700">{{ $entreprise->user->name }}</p>
                </div>
                <div class="text-center mb-4">
                    <i class="fas fa-envelope text-blue-500"></i>
                    <p class="text-sm text-gray-700">{{ $entreprise->user->email }}</p>
                </div>
                <hr class="my-4 border-blue-300">
                <div class="flex justify-center">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full">Subscribe</button>
                </div>
                <a href="#" class="block text-blue-500 mt-4 hover:underline text-center">En savoir plus</a>
            </div>
        @endforeach
    </div>

    <script>
        document.getElementById('searchInput').addEventListener('input', function() {
            var searchTerm = this.value.trim().toLowerCase();
            var entrepriseCards = document.querySelectorAll('.entreprise-card');

            entrepriseCards.forEach(function(card) {
                var nom = card.getAttribute('data-nom').toLowerCase();
                if (nom.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>

</x-app-layout>
