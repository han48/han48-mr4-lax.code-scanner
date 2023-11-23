<div class="{{ $viewClass['form-group'] }} {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">
    <label for="{{ $id }}" class="{{ $viewClass['label'] }} control-label">{{ $label }}</label>
    <div class="{{ $viewClass['field'] }}">
        @include('admin::form.error')
        <input {!! $attributes !!} />
        <x-mr4-lc.code-scanner id='{{ $id }}' mode='{{ $mode }}' />
        <div>
            <img id="__{{ $id }}_img">
        </div>
        @include('admin::form.help-block')
    </div>
</div>
