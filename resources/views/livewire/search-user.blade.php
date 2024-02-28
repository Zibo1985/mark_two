 <div>
     <input wire:model.live="firma" placeholder="Firma">
     <input wire:model.live="vorname" placeholder="Vorname">
     <input wire:model.live="nachname" placeholder="Nachname">
     <input wire:model.live="ort" placeholder="Ort">
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
