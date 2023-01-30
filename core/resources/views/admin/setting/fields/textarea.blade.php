<div class="form-group {{ $errors->has($field['name']) ? ' has-error' : '' }}">
    <label for="{{ $field['name'] }}">{{ @translate('app',$field['label']) }}</label>
    <textarea
        rows="5"
        cols="45"
        type="{{ $field['type'] }}"
        name="{{ $field['name'] }}"
        class="form-control {{ Arr::get( $field, 'class') }}"
        id="{{ $field['name'] }}"
        placeholder="{{ @translate('app',$field['label']) }}"
        >{{ old($field['name'], \settingstyles($field['name'])) }}</textarea>

    @if ($errors->has($field['name'])) <small class="help-block">{{ $errors->first($field['name']) }}</small> @endif
</div>
