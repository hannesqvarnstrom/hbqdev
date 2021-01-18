<div class='card'>
    @foreach ($comments as $comment)
    <div class=''>
    <h5>{{$comment->name}}</h5>
    <p>{{$comment->body}}</p>
    <small>Posted at {{$comment->created_at}}</small>
    </div>
    <hr>
    @endforeach
</div>