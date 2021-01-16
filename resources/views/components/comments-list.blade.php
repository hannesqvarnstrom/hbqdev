<div>
    @foreach ($comments as $comment)
    <div class='card'>
    <h5>{{$comment->name}}</h5>
    <p>{{$comment->body}}</p>
    <small>Posted at {{$comment->created_at}}</small>
    </div>
    @endforeach
</div>