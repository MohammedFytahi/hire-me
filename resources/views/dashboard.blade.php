<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-1 w-646 items-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container lg:w-full xl:w-full sm:w-full md:w-2/3 bg-white shadow-lg transform duration-200 easy-in-out">
                    <div class="h-32 overflow-hidden">
                        <img class="w-full" src="https://images.unsplash.com/photo-1605379399642-870262d3d051?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80" alt="" />
                    </div>
                    <div class="flex justify-center px-5 -mt-12">
                        <img class="h-32 w-32 bg-white p-2 rounded-full" src="{{ asset('storage/' . Auth::user()->image) }}" alt="" />
                    </div>
                    <div>
                        <div class="text-center px-14">
                            <h2 class="text-gray-800 text-3xl font-bold">{{ Auth::user()->name }}</h2>
                            <a class="text-gray-400 my-8 hover:text-blue-500 block" href="https://www.instagram.com/immohitdhiman/" target="_blank">{{ Auth::user()->email }}</a>
                            @if(!Auth::user()->utilisateur) <!-- Check if utilisateur record exists for the user -->
                                <a href="{{ route('section') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 my-6 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add profile section</a>
                            @endif
                            @if(Auth::user()->utilisateur) <!-- Check if utilisateur record exists for the user -->
                            <a href="{{ route('section') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 my-6 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit profile section</a>
                        @endif
                            <p class="mt-2 text-gray-500 text-sm">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                        <hr class="mt-6" />
                        <div class="flex bg-gray-50">
                            <div class="text-center w-1/2 p-4 hover:bg-gray-100 cursor-pointer">
                                <p><span class="font-semibold">2.5 k </span> Followers</p>
                            </div>
                            <div class="border"></div>
                            <div class="text-center w-1/2 p-4 hover:bg-gray-100 cursor-pointer">
                                <p><span class="font-semibold">2.0 k </span> Following</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12 w-646 items-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex items-center">
                        <img class="w-20 h-20 ml-2 fill-current" src="{{ asset('storage/' . Auth::user()->image) }}" alt="Profile Image">
                        <div class="mx-5">{{ Auth::user()->name }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
