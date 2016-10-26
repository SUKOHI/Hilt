<div class="text-danger">
    @if($errors->has($key))
        {{ $errors->first($key) }}
    @endif
</div>