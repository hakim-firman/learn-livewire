<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule(['required','string','min:3','max:255'])]
    public $title='';
    #[Rule(['required'])]
    public $body='';
    public function store(){
        $user= User::find(1); //TODO:make auth

        $validated=$this->validate();
        $user->posts()->create($validated);
       flash('Post Created Successfully','success');
        $this->reset();
    }
}
