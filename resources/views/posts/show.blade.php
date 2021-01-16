<x-layout.layout>
    {{Breadcrumbs::render('post', $post)}}
    <div class='container'>
        <div class=' article col-8'>
    <h3>{{$post->title}}</h3>
    <small>Created at {{$post->created_at}}</small>
    <p>{{$post->body}}</p>
        </div>
    </div>
</x-layout.layout>