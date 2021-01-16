<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Comment;
use App\Models\Post;

class CommentsList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $comments;
    public function __construct($post)
    {
        //
        $this->comments = $post->comments()->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.comments-list');
    }
}
