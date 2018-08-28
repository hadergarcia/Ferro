<div class="form-group">
             
                <label for="Situacion">Situacion</label>
                <select class="custom-select d-block w-100" id="" name="name" required>
                  <option value="PC" >PC</option>
                  <option value="Impresora" >Impresora</option>
                </select>
</div>

<div class="form-group">
    {!! Form::label('short', 'Descripcion breve del Problema') !!}
    {!! Form::text('short', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Descripcion del Problema') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
   
</div>
