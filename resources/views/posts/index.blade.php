<x-layout.layout>
    {{Breadcrumbs::render('posts')}}
<h2>All posts</h2>
<hr>
<?php $chunkposts = $posts->chunk(2)?>
<div class='container'>
@foreach ($chunkposts as $chunk)
<div class='row'>
@foreach ($chunk as $post)
<div class='col-md-6'>
    <div class='card px-2'>
<a href='/posts/{{$post->id}}'><h4>{{$post->title}}</h4></a>
<p>{{$post->excerpt}}</p>
<small>Created at {{$post->created_at}}</small>
    </div>
</div>
@endforeach
</div>
@endforeach
</div>
{{$posts->links()}}
</x-layout.layout>