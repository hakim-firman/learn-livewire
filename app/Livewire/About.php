<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Content')]

class About extends Component
{
    public function render()
    {
        sleep(3);
        return view('livewire.about');
    }
}
