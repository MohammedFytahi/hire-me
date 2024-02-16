<x-guest-layout>
    <div class="wrapper">
        <div class="login-box">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf

                <!-- Name -->
                <div class="input-box">
                    <label for="name">Name</label>
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="input-box mt-4">
                    <label for="email">Email</label>
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Image -->
                <div class="input-box mt-4">
                    <label for="image">Image</label>
                    <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required autocomplete="image" />
                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="input-box mt-4">
                    <label for="password">Password</label>
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="input-box mt-4">
                    <label for="password_confirmation">Confirm Password</label>
                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Role -->
                <div class="input-box mt-4">
                    <label for="role">Role</label>
                    <select id="role" name="role" class="block mt-1 w-full bg-gray-100 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <option value="user">User</option>
                        <option value="entreprise">Entreprise</option>
                    </select>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                    <x-primary-button class="ms-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
