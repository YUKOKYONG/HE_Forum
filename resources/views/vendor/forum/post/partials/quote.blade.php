<div class="card mb-2 bg-transparent" style="border-color: blue;">
    <div class="card-body">
        <div class="mb-2 text-warning">
            <span class="float-end">
                <a href="{{ Forum::route('thread.show', $post) }}" class="text-white">#{{ $post->sequence }}</a>
            </span>
            {{ $post->authorName }} <span class="text-white">{{ $post->posted }}</span>
        </div>
        {!! \Illuminate\Support\Str::limit(Forum::render($post->content)) !!}
    </div>
</div>