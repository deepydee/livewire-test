<div>
    @foreach ($contacts as $contact)
        @livewire('say-hi', ['contact' => $contact], key($contact->name))
        <button wire:click="removeContact('{{$contact->name}}')">Remove</button>
    @endforeach

    <hr>

    {{now()}}
</div>
