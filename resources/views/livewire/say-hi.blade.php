<div>
    Hello {{$contact->name}}: {{now()}}

    <button wire:click="$refresh">Refresh</button>
    <button wire:click="emitFoo">emitFoo</button>
</div>
