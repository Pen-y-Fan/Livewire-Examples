<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPosts extends Component
{
    use WithPagination;

    public $readyToLoad = false;

    public $contentIsVisible = false;

    public $message = [];

    public function loadPosts()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        return view('livewire.show-posts', [
            'posts' => $this->readyToLoad
                ? Post::paginate(10)
                : [],
        ]);
    }

    public function toggleContent()
    {
        $this->contentIsVisible = !$this->contentIsVisible;
        if ($this->contentIsVisible) {
            $post = Post::find(rand(0, 50));
            $this->message = [];
            $this->message['id'] = $post->id;
            $this->message['title'] = $post->title;
            $this->message['post'] = $post->post;
        }
    }
}
