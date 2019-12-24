<div wire:init="loadPosts">
    <ul>

        @foreach ($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>
    <br>
    @if (count($posts) > 0)
        {{ $posts->links() }}
    @endif

    <button class="btn btn-primary" wire:loading.class.remove="btn-primary" wire:click.prefetch="toggleContent">Show
        Content
    </button>

    @if ($this->contentIsVisible)
        <div wire:transition.slide>
            <p>Post: {{ $this->message['id'] }} <strong>
                    {{ $this->message['title'] }}
                </strong></p>
            <p>{{ $this->message['post'] }}</p>
        </div>
    @endif

    {{--    <div wire:poll.750ms>--}}
    {{--        Current time: {{ now() }}--}}
    {{--    </div>--}}
</div>
