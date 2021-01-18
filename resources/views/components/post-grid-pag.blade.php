<?php $chunkposts = $posts->chunk(2)?>
<div class='container'>
@foreach ($chunkposts as $chunk)
<div class='row'>
@foreach ($chunk as $post)
<div class='col-md-6'>
    <div class='card post-grid-item'>
        
<a class='post-grid-title' href='/posts/{{$post->id}}'>
    <h4>
        {{$post->title}}
        @if ($post->hasTag()) 
        <span class='badge bg-secondary'>
            {{-- {{dd($post->firstTag()->name)}} --}}
            {{$post->firstTag()->name}}
        </span>
        @endif
    </h4> 
</a>
<p>{{$post->excerpt}}</p>
<small>Created at {{$post->created_at}}</small>
<small>{{$post->comment_count}} comments</small>
    </div>
</div>
@endforeach
</div>
@endforeach
</div>
{{$posts->links()}}