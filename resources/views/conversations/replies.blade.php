@foreach($conversation->replies as $reply)
    <div>
        <header style="display: flex; justify-content: space-between">
            <p class="m-0"><strong>{{ $reply->user->name }} said...</strong></p>

            @if($reply->isBest())
                <span style="color: green">Best Reply!!!</span>
            @endif
        </header>

        {{ $reply->content }}

        @can('update', $conversation)
        <form action="/best-replies/{{ $reply->id }}" method="POST">
            @csrf
            <button type="submit">Best reply?</button>
        </form>
        @endcan
    </div>

    @continue($loop->last)

    <hr>
@endforeach
