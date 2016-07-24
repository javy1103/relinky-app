<div class="uk-form-row">
    <label for="name">{{$attr}}</label>
    <input class="md-input {{ $errors->has($attr) ? 'md-input-danger' : '' }}" type="{{ ($attr == 'password' || $attr == 'email') ? $attr : 'text' }}" id="{{$attr}}" name="{{$attr}}" value="{{ old($attr) }}" />
    @if ($errors->has($attr))
        <div class="parsley-errors-list filled"><span class="parsley-required">{{ $errors->first($attr) }}</span></div>
    @endif
</div>
