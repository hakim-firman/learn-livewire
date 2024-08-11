<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Illuminate\Support\Facades\Blade;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Post')]
#[Lazy]
class Index extends Component
{
    #[On('PostCreated')]
    public function updateList($post){

    }

    public function placeholder(){
        return view('livewire.posts.placeholder');

    }

    public function render()
    {
        sleep(3);
        return view('livewire.posts.index',[
            'posts'=>Post::query()->with('user')->latest()->get()
        ]);
    }
}
