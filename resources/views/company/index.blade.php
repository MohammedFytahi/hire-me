<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('company informations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('company') }}">
                        @csrf
                
                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Company name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                                autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                
                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="logo" :value="__('Company logo')" />
                            <x-text-input id="logo" class="block mt-1 w-full" type="file" name="logo" :value="old('Logo')"
                                required autocomplete="logo" />
                            <x-input-error :messages="$errors->get('log')" class="mt-2" />
                        </div>
                
                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="slogan" :value="__('Slogan')" />
                
                            <x-text-input id="slogan" class="block mt-1 w-full" type="text" name="slogan" required
                                autocomplete="slogan" />
                
                            <x-input-error :messages="$errors->get('slogan')" class="mt-2" />
                        </div>
                
                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="industry" :value="__('industry')" />
                
                            <x-text-input id="industry" class="block mt-1 w-full" type="text"
                                name="industry" required autocomplete="industry" />
                
                            <x-input-error :messages="$errors->get('industry')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="description" :value="__('description')" />
                
                            <x-text-input id="description" class="block mt-1 w-full" type="text"
                                name="description" required autocomplete="description" />
                
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                
                        <div class="flex items-center justify-end mt-4">
                           
                
                            <x-primary-button class="ms-4">
                                {{ __('confirm') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
