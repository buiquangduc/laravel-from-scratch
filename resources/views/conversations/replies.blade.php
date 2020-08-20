@foreach($conversation->replies as $reply)
    <div>
        <p class="m-0"><strong>{{ $reply->user->name }} said...</strong></p>

        {{ $reply->content }}
    </div>

    @continue($loop->last)

    <hr>
@endforeach
