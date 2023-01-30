<div class="form-group {{ $errors->has($field['name']) ? ' has-error' : '' }}">
    <label for="{{ $field['name'] }}">{{ @translate('app',$field['label']) }}</label>
    <select name="{{ $field['name'] }}" class="form-control {{ Arr::get( $field, 'class') }}" id="{{ $field['name'] }}">
        @foreach(Arr::get($field, 'options', []) as $val => $label)
            <option @if( old($field['name'], \settingsapi($field['name'])) == $val ) selected  @endif value="{{ $val }}">{{ $label }}</option>
        @endforeach
    </select>
    @if ($errors->has($field['name'])) <small class="help-block">{{ $errors->first($field['name']) }}</small> @endif
</div>
