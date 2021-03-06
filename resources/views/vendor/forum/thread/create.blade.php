@extends ('forum::master', ['breadcrumbs_append' => [trans('forum::threads.new_thread')]])

@section ('content')
    <div id="create-thread">
        <h2 class="text-white">{{ trans('forum::threads.new_thread') }} ({{ $category->title }})</h2>

        <form method="POST" action="{{ Forum::route('thread.store', $category) }}">
            @csrf

            <div class="mb-3 text-white">
                <label for="title">{{ trans('forum::general.title') }}</label>
                <input type="text" name="title" value="{{ old('title') }}" class="form-control bg-transparent text-white border-warning">
            </div>

            <div class="mb-3">
                <label class="text-white">Description</label>
                <textarea name="content" class="form-control bg-transparent text-white border-warning">{{ old('content') }}</textarea>
            </div>

            <div class="text-end">
                <a href="{{ URL::previous() }}" class="btn btn-link">{{ trans('forum::general.cancel') }}</a>
                <button type="submit" class="btn btn-primary px-5">{{ trans('forum::general.create') }}</button>
            </div>
        </form>
    </div>
@stop
