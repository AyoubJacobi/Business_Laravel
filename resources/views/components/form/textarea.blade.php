    
    <div class="form-group">


            {{ Form::label($name, null, ['class' => 'col-sm-2 control-label']) }}
  
            {{ Form::textarea($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}

        
    </div>
    
    