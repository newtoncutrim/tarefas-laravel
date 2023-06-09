<div class="inputArea">
    <label for="{{$name}}">
        {{$label ?? ''}}
    </label>
    <input type="{{empty($type) ? 'text' : $type}}" id="{{$name}}" name="{{$name}}" {{empty($required) ? '' : 'required'}} placeholder="{{$placeholder ?? ''}}" value="{{$value ?? ''}}">
</div>
