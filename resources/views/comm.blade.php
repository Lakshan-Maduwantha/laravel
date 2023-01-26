@foreach($comments as $comment)
    @if(is_object($comment))
        <p>{{ $comment->content }}</p>
    @endif
@endforeach
