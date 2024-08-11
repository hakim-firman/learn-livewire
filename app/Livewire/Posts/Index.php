<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Post')]
#[On('PostCreated')]
class Index extends Component
{
    public function updateList($post){

    }
    public function render()
    {
        return view('livewire.posts.index',[
            'posts'=>Post::query()->with('user')->latest()->get()
        ]);
    }
}
