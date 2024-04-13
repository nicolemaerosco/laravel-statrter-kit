<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center items-center">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-center text-gray-900 dark:text-gray-100 text-xl">
                {{ __("This is Nicole Mae A. Rosco!") }}
            </div>
            <div class="p-6 text-center text-gray-900 dark:text-gray-100">
                {{ __("Hi Gorgeous and Handsome Users! You're logged in! Welcome to my Laravel Website!") }}
            </div>
        </div>
    </div>
</div>


</x-app-layout>
