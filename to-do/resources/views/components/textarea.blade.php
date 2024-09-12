
@props(
  ['name'  , 'value'=>'' ,'label'=>false ,'placeholder'=>'']
)

<label for="{{$name}}">{{$label}}</label>


<textarea  name="{{$name}}" 

{{$attributes->class([
    'form-control',
    'is-invalid' => $errors->has($name),])
}}
 id="{{$name}}" placeholder="{{$placeholder}}">{{old($name, $value)}}</textarea>

@if ($errors->has($name))
<div class="invalid-feedback">
  {{ $errors->first($name) }}
</div>
@endif