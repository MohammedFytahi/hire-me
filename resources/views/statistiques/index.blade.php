<x-app-layout>
    <h1 class="text-center text-3xl font-semibold mb-8">Statistiques</h1>

    <div class="flex justify-center">
        <div class="max-w-3xl w-full">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="mb-6 text-2xl font-bold text-gray-900">Nombre d'utilisateurs: {{ $nombreUtilisateurs }}</h2>
                <h2 class="mb-6 text-2xl font-bold text-gray-900">Nombre d'entreprises: {{ $nombreEntreprises }}</h2>
                <h2 class="mb-6 text-2xl font-bold text-gray-900">Nombre d'offres: {{ $nombreOffres }}</h2>
            </div>
        </div>
    </div>
</x-app-layout>
