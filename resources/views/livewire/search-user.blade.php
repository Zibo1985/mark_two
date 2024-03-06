 <div>

     <form>
         <div class="grid gap-6 mb-6 md:grid-cols-2">
             <div>
                 <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Firma</label>
                 <input wire:model.live="firma" type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Karl Gustav GmbH" />
             </div>
             <div>
                 <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vorname</label>
                 <input wire:model.live="vorname" type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" />
             </div>
             <div>
                 <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nachname</label>
                 <input wire:model.live="nachname" type="text" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Schmidt" />
             </div>
             <div>
                 <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ort</label>
                 <input wire:model.live="ort" type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="01** *** ** ***" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" />
             </div>
         </div>
         <div wire:loading.table>
             <div class="flex items-center justify-center w-56 h-56 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                 <div role="status">
                     <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                         <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" /></svg>
                     <span class="sr-only">Loading...</span>
                 </div>
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
         <tbody lazy>
             @foreach($item as $user)

             <x-tr>
                 <x-th lazy>{{ $user->id }}</x-th>
                 <x-td lazy>{{ $user->rfirma }}</x-td>
                 <x-td lazy>{{ $user->ranrede }}</x-td>
                 <x-td lazy>{{ $user->rvorname }}</x-td>
                 <x-td lazy>{{ $user->rname }}</x-td>
                 <x-td lazy>{{ $user->rstrasse }}</x-td>
                 <x-td lazy>{{ $user->rplz }}</x-td>
                 <x-td lazy>{{ $user->rort }}</x-td>
                 <x-td lazy>{{ $user->id }}</x-td>
             </x-tr>
 </div>
 @endforeach
 </tbody>
 </x-table>
 </div>
