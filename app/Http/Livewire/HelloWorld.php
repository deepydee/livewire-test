<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Illuminate\Http\Request;
use Livewire\Component;

class HelloWorld extends Component
{
    public $contacts;
    public $name;
    protected $listeners = ['foo' => '$refresh'];

    public function mount()
    {
        $this->contacts = Contact::all();
    }

    public function addContact()
    {
        Contact::create(['name' => $this->name]);
        $this->contacts = Contact::all();
    }

    public function removeContact($name)
    {
        Contact::whereName($name)->first()->delete();
        $this->contacts = Contact::all();
    }

    // public function refreshChildren()
    // {
    //     $this->emit('refreshChildren', 'foo');
    // }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
