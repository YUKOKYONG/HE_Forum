@extends ('forum::master', ['thread' => null, 'breadcrumbs_append' => [trans('forum::threads.unread_updated')]])

@section ('content')
    <div id="new-posts">
        <h2 class="text-white">{{ trans('forum::threads.unread_updated') }}</h2>

        @if (! $threads->isEmpty())
            <div class="threads list-group my-3 shadow-sm">
                @foreach ($threads as $thread)
                    @include ('forum::thread.partials.list')
                @endforeach
            </div>
        @else
            <div class="card my-3 bg-transparent">
                <div class="card-body text-center text-white border border-warning rounded">
                    {{ trans('forum::threads.none_found') }}
                </div>
            </div>
        @endif
    </div>

    @if (! $threads->isEmpty())
        @can ('markThreadsAsRead')
            <!--<div class="text-center">
                <button class="btn btn-primary px-5" data-open-modal="mark-as-read">
                    <i data-feather="book"></i> {{ trans('forum::general.mark_read') }}
                </button>
            </div>-->

            @include ('forum::thread.modals.mark-as-read')
        @endcan
    @endif
@stop
