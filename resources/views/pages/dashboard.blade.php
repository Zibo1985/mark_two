<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <x-button>test</x-button>
                    <div>
                        <x-text-input></x-text-input>
                        <x-text-input></x-text-input>
                    </div>
                    <input type="text" wire:model.blur="title">

                    <div>
                        @error('title') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
