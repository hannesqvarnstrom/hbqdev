<x-layout.layout>
    {{Breadcrumbs::render('post', $post)}}
    <div class='container'>
        <div class='article col-8'>
            @if ($post->hasTag())
            <ul><h5>Tags</h5>
            @foreach ($post->tags as $tag)
            <li class='tag-post'><span class='badge bg-secondary'>
           {{$tag->name}}
        </span></li>
            @endforeach
            </ul>
            @endif
            <div class='aside'>
                <small>Category - </small>
                <strong>{{$post->cat_name}}</strong>
            </div>
            <section class='article-content'>
    <h3>{{$post->title}}</h3>
    <small>Created at {{$post->created_at}}</small>
    <p>{{$post->body}}</p>
            </section>
        </div>
    </div>
    <x-comment-form :post='$post'></x-comment-form>
    <h4>{{$post->comment_count}} comments</h4>
    <x-comments-list :post='$post'></x-comments-list>
</x-layout.layout>