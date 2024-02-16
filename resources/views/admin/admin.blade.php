<x-app-layout>

    
    <h1 class="text-center text-3xl font-semibold mb-8">Offres</h1>

    <div class="flex justify-center">
        <div class="max-w-3xl w-full">
            @foreach ($offres as $offre)
            <div class="mb-8">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <img src="https://mdbcdn.b-cdn.net/img/new/slides/198.jpg"
                        class="mb-6 w-full rounded-lg shadow-lg" alt="image" />

                    <div class="mb-6 flex items-center">
                        <img src="{{ asset('storage/' . Auth::user()->image) }}" class="mr-2 h-8 rounded-full"
                            alt="avatar" loading="lazy" />
                        <div>
                            <span class="text-gray-600">Publié le <u>{{ $offre->created_at }}</u> par </span>
                            <a href="#!" class="font-semibold text-blue-500 hover:underline">{{ $offre->user?->name }}</a>
                        </div>
                    </div>

                    <h1 class="mb-6 text-3xl font-bold text-gray-900">
                        {{ $offre->titre }}
                    </h1>

                    <p class="text-gray-800 mb-6">
                        {{ Str::limit($offre->description, 100) }}
                    </p>

                    <div class="flex mb-4">
                        <div class="mr-4">
                            <strong class="text-gray-700">Compétences:</strong> {{ $offre->compétences_requises }}
                        </div>
                        <div class="mr-4">
                            <strong class="text-gray-700">Localisation:</strong> {{ $offre->emplacement }}
                        </div>
                        <div>
                            <strong class="text-gray-700">Type de contrat:</strong> {{ $offre->type_contrat }}
                        </div>
                    </div>

                    @if (!(Auth()->user()->entreprise))
                            <div class="mt-6 text-right">
                                <button class="border rounded bg-green-400 p-2 postuler-btn"
                                    data-offre-id="{{ $offre->id }}">Apply</button>
                            </div>
                            @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script>
        // Écoute les clics sur les boutons "Postuler"
        document.querySelectorAll('.postuler-btn').forEach(button => {
            button.addEventListener('click', function() {
                const offreId = this.getAttribute('data-offre-id');
                postuler(offreId);
            });
        });

        function postuler(offreId) {
            // Utilisation de la route pour obtenir l'URL
            const url = "{{ route('postuler', ':offreId') }}".replace(':offreId', offreId);

            $.ajax({
                url: url,
                method: "POST",
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Apllyed!',
                        text: response.message,
                        showConfirmButton: false,
                        timer: 1500,
                        // Personnalisation du style
                        customClass: {
                            popup: 'my-custom-popup-class',
                            title: 'my-custom-title-class',
                            content: 'my-custom-content-class',
                        },
                    });
                },
                error: function(xhr, status, error) {
                    // Gérer les erreurs de la demande Ajax si nécessaire
                    console.error(error);
                }
            });
        }
    </script>
</x-app-layout>
