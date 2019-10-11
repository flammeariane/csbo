<div class="alert alert-{{ $type ?? 'info' }}" role="alert">
    @isset($closable)
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    @endisset

    {{ $slot }}
</div>