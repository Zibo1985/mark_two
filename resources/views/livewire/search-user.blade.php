 <div>
 
<form>
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Firma</label>
            <input 
            wire:model.live="firma"
            type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Karl Gustav GmbH"  />
        </div>
        <div>
            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vorname</label>
            <input
            wire:model.live="vorname"
             type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John"  />
        </div>
        <div>
            <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nachname</label>
            <input
            wire:model.live="nachname"
             type="text" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Schmidt"  />
        </div>  
        <div>
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ort</label>
            <input
            wire:model.live="ort"
             type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="01** *** ** ***" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"  />
        </div>
       
    </div>
    
 </form>
     <x-table class="table">
         <thead>
             <tr>
                 <x-th scope="col">KdNr.</x-th>
                 <x-th scope="col">Firma</x-th>
                 <x-th scope="col">Anrede</x-th>
                 <x-th scope="col">Vorname</x-th>
                 <x-th scope="col">Nachname</x-th>
                 <x-th scope="col">Strasse</x-th>
                 <x-th scope="col">PLZ</x-th>
                 <x-th scope="col">Ort</x-th>
                 <x-th scope="col">Kennzeichen</x-th>
                 <x-th scope="col">Info</x-th>
             </tr>
         </thead>
         <tbody>
             @foreach($item as $user)
             <x-tr>
                 <x-th>{{ $user->id }}</x-th>
                 <x-td>{{ $user->rfirma }}</x-td>
                 <x-td>{{ $user->ranrede }}</x-td>
                 <x-td>{{ $user->rvorname }}</x-td>
                 <x-td>{{ $user->rname }}</x-td>
                 <x-td>{{ $user->rstrasse }}</x-td>
                 <x-td>{{ $user->rplz }}</x-td>
                 <x-td>{{ $user->rort }}</x-td>
                 <x-td>{{ $user->id }}</x-td>
             </x-tr>
             @endforeach
         </tbody>
     </x-table>
 </div>
