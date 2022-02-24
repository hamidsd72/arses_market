@foreach ($comment as $comment)
    <article class="timeline-entry @unless($comment->isAdmin){{ __('left-aligned') }}@endunless">
        <div class="timeline-entry-inner">
            <time datetime="2014-01-10T03:45" class="timeline-time"><span>{{ $comment->created_at->format('H:i') }}</span><span>{{ $comment->created_at->format('Y-m-d') }}</span></time>
            <div class="timeline-icon">
                @if ($comment->isAdmin)
                    <img src="/boy.jpg" class="rounded-circle" height="45px" alt="پشتیبانی">
                @else
                    @if(Auth::user()->avatar)
                        <img src="/{{ Auth::user()->avatar }}" class="rounded-circle" height="45px" alt="{{ Auth::user()->name }}">
                    @else
                        <img src="/boy.jpg" class="rounded-circle" height="45px" alt="{{ Auth::user()->name }}">
                    @endif
                @endif
            </div>
            <div class="timeline-label @if($comment->completed){{ __('bg-success') }}@endif">
                <h4 class="timeline-title">{{ $comment->content }}</h4>
                <p>{{ $comment->paragraph }}</p>
                @if ($comment->attachment)
                    <p><a href="/{{ $comment->attachment }}">فایل پیوست شده</a></p>
                @endif
            </div>
        </div>
    </article>
@endforeach
