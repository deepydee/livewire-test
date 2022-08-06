<div>
    <input wire:model="name" type="text">
    <input wire:model="loud" type="checkbox">
    
    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Bye</option>
        <option>Adios</option>
    </select>

    {{ implode(', ', $greeting) }}, {{$name}}@if ($loud)! @endif

    {{-- <form action="#" wire:submit.prevent="resetName('Bingo')">
        <button>Reset Name</button>
    </form> --}}

    <form action="#" wire:submit.prevent="$set('name', 'Bingo')">
        <button>Reset Name</button>
    </form>
    

</div>
