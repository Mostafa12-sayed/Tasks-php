
@props(
  ['name' , 'type'=>'text' , 'value'=>'' ,'label' ,'placeholder'=>'']
)

<label for="{{$name}}">{{$label}}</label>


<input type="{{$type}}" name="{{$name}}" value="{{old($name, $value)}}"

{{$attributes->class([
    'form-control',
    'is-invalid' => $errors->has($name),])
}}
 id="{{$name}}" placeholder="{{$placeholder}}">

@if ($errors->has($name))
<div class="invalid-feedback">
  {{ $errors->first($name) }}
</div>
@endif