<label>
    <span class="label">{{ $field->label }}</span>&nbsp;
</label>
<input id="{{ $field->name }}" name="{{ $field->name}}" value="{{ old($field->name,$value) }}" type="hidden">
<trix-editor input="{{ $field->name }}"></trix-editor>