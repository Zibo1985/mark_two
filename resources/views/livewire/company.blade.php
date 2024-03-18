<div>
    <p class="text-gray-500 dark:text-gray-400">Firmen in den du beschäftigt warst oder bist : </p>
   
        @foreach ($companys as $company)
        <div>
            {{ $company->name }}
        <x-button wire:click.prevent="deleteCompany">delete this Company</x-button>
    </div>
    @endforeach
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

    <div>
        <form wire:submit.prevent="createNewCompany" action="">
            <p class="mx-4 ">welche Firma gehört zu deinem Lebenslauf?</p>
            <input wire:model="name" type="name" placeholder="name" class="bg-gray-50 border m-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            <div>
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <x-button>create my Company</x-button>
        </form>
    </div>
</div>
