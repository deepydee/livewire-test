<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Jelly';

    public function mount($name)
    {
        $this->name = $name;
    }

    public function updatedName($name)
    {
        $this->name = strtoupper($name);
    }
 

    public function render()
    {
        return view('livewire.hello-world');
    }
}
