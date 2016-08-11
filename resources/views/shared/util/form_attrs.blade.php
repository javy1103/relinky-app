<div class="{{ ($attr == 'textarea') ? 'uk-width-medium-1-1' : 'uk-width-medium-1-2' }}">
    <label for="name">{{ucfirst($key)}}</label>
    @if( )
    <input class="md-input {{ $errors->has($key) ? 'md-input-danger' : '' }}" type="{{$attr}}" id="{{$key}}" name="{{$key}}" value="{{ old($key) }}" />
    @if ($errors->has($key))
        <div class="parsley-errors-list filled"><span class="parsley-required">{{ $errors->first($key) }}</span></div>
    @endif
</div>
