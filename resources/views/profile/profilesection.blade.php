
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <form method="POST" action="{{ route('section') }}">
        @csrf

  <!-- Titre -->
  <div class="mt-4">
    <x-input-label for="titre" :value="__('Titre')" />
    <x-text-input id="titre" class="block mt-1 w-full" type="text" name="titre" :value="old('titre')" required />
    <x-input-error :messages="$errors->get('titre')" class="mt-2" />
</div>

<!-- Poste Actuel -->
<div class="mt-4">
    <x-input-label for="post_actuel" :value="__('Poste Actuel')" />
    <x-text-input id="post_actuel" class="block mt-1 w-full" type="text" name="post_actuel" :value="old('post_actuel')" required />
    <x-input-error :messages="$errors->get('post_actuel')" class="mt-2" />
</div>

<!-- Industrie -->
<div class="mt-4">
    <x-input-label for="industrie" :value="__('Industrie')" />
    <x-text-input id="industrie" class="block mt-1 w-full" type="text" name="industrie" :value="old('industrie')" required />
    <x-input-error :messages="$errors->get('industrie')" class="mt-2" />
</div>

<!-- Adresse -->
<div class="mt-4">
    <x-input-label for="adresse" :value="__('Adresse')" />
    <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required />
    <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
</div>

<!-- Telephone -->
<div class="mt-4">
    <x-input-label for="telephone" :value="__('Telephone')" />
    <x-text-input id="telephone" class="block mt-1 w-full" type="text" name="telephone" :value="old('telephone')" required />
    <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
</div>

<!-- Autre Contact -->
<div class="mt-4">
    <x-input-label for="autre_contact" :value="__('Autre Contact')" />
    <x-text-input id="autre_contact" class="block mt-1 w-full" type="text" name="autre_contact" :value="old('autre_contact')" required />
    <x-input-error :messages="$errors->get('autre_contact')" class="mt-2" />
</div>

<!-- A Propos -->
<div class="mt-4">
    <x-input-label for="a_propos" :value="__('A Propos')" />
    <x-text-input id="a_propos" class="block mt-1 w-full" type="text" name="a_propos" :value="old('a_propos')" required />
    <x-input-error :messages="$errors->get('a_propos')" class="mt-2" />
</div>

<!-- CV -->
<div class="mt-4">
    <x-input-label for="cv" :value="__('CV')" />
    <x-text-input id="cv" class="block mt-1 w-full" type="text" name="cv" :value="old('cv')" required />
    <x-input-error :messages="$errors->get('cv')" class="mt-2" />
</div>

<div class="flex items-center justify-end mt-4">
  

    <x-primary-button class="ms-4">
        {{ __('Save') }}
    </x-primary-button>
</div>
</form>
</x-app-layout>