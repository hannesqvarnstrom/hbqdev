<x-layout.layout>
    {{Breadcrumbs::render('post', $post)}}
    <div class='container'>
        <div class=' article col-8'>
            <ul><h5>Tags</h5>
            @foreach ($post->tags as $tag)
            <li>{{$tag->name}}</li>
            @endforeach
            </ul>
            <div class='aside'>
                <small>Category - </small>
                <strong>{{$post->cat_name}}</strong>
            </div>
    <h3>{{$post->title}}</h3>
    <small>Created at {{$post->created_at}}</small>
    <p>{{$post->body}}</p>
        </div>
    </div>
    <x-comment-form :post='$post'></x-comment-form>
    <h4>{{$post->comment_count}} comments</h4>
    <x-comments-list :post='$post'></x-comments-list>
</x-layout.layout>