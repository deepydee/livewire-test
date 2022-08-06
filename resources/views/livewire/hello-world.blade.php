<div>
    <input wire:model="name" type="text">
    <input wire:model="loud" type="checkbox">
    
    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Bye</option>
        <option>Adios</option>
    </select>

    {{ implode(', ', $greeting) }}, {{$name}}@if ($loud)! @endif
</div>
