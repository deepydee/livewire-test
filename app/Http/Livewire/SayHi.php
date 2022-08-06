<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class SayHi extends Component
{
    public $contacts;
    // protected $listeners = ['refreshChildren' => 'refreshMe'];

    // public function refreshMe($var)
    // {
    //     // dd($var);
    // }
    protected $listeners = ['refreshChildren' => '$refresh'];

    public function refreshChildren()
    {

    }

    public function emitFoo()
    {
        $this->emitUp('foo');
    }

    public function mount(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function render()
    {
        return view('livewire.say-hi');
    }
}
