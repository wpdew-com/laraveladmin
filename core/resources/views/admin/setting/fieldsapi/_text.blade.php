<div class="form-group {{ $errors->has($field['name']) ? ' has-error' : '' }}">
    <label for="{{ $field['name'] }}">{{ @translate('app',$field['label']) }}</label>
    <input type="{{ $field['type'] }}"
           name="{{ $field['name'] }}"
           value="{{ old($field['name'], \settingsapi($field['name'])) }}"
           class="form-control {{ Arr::get( $field, 'class') }}"
           id="{{ $field['name'] }}"
           placeholder="{{ @translate('app',$field['label']) }}">

    @if ($errors->has($field['name'])) <small class="help-block">{{ $errors->first($field['name']) }}</small> @endif
</div>
