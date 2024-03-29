<div>
    <p class="text-gray-500 dark:text-gray-400">Firmen in den du beschäftigt warst oder bist : </p>

    @foreach ($companys as $company)
    <div class=" flex justify-between">
        <div class="flex">
            {{ $company->name }}
        </div>
        <div class="flex">
            <button wire:click.prevent="deleteCompany({{ $company->id }})" class="text-gray-900 bg-white border border-gray-300 focus:outline-none space-x-0  hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5  me-1 m-1 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 ">
                löschen
            </button>
        </div>
    </div>
    <hr class="h-px my-0 bg-gray-200 border-0 dark:bg-gray-700">
    @endforeach
    <hr class="h-px my-8 bg-gray-800 border-1 dark:bg-gray-700">

    <div>
        <form wire:submit.prevent="createNewCompany" action="">
            <p class="mx-4 ">welche Firma gehört noch zu deinem Lebenslauf?</p>
            <input wire:model="name" type="name" placeholder="name" class="bg-gray-50 border m-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            <div>
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <x-button>create my Company</x-button>
        </form>
    </div>
</div>
