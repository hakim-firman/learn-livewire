<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public $title = '';

    #[Rule(['required'])]
    public $body = '';

    public function store()
    {


        $validated = $this->validate();
        Auth::user()->posts()->create($validated);
        flash('Post Created Successfully', 'success');
        $this->reset();
    }
}
