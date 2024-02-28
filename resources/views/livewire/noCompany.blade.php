<div>
    <form wire:submit.prevent="createNewCompany" action="">
        <input wire:model="name" type="name" placeholder="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"   />
         <div>
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <x-button>create my Company</x-button>
    </form>
</div>
