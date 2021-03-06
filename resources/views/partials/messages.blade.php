<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has($msg))
    <p class="alert alert-{{ $msg }}">{{ Session::get($msg) }}</p>
    @endif
    @endforeach
</div>

@if (session('status'))
    <div class="alert alert-warning">
        {{ session('status') }}
    </div>
@endif