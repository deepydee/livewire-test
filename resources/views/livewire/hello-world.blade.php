<div>
    @foreach ($contacts as $contact)
        @livewire('say-hi', ['contact' => $contact], key($contact->name))
        <button wire:click="removeContact('{{$contact->name}}')">Remove</button>
    @endforeach

    <hr>

    <input wire:model='name' type="text">
    <button wire:click="addContact()">Add</button>

    {{now()}}

    <button wire:click="$emit('refreshChildren')">Refresh Children</button>

</div>
