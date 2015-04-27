 <div class="row">
  <div class="col-lg-12">
    <div class="row">
      <div class="col-lg-6">
          <section class="panel">
            <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">
                      <div class="form-group">
                        {!! Form::label('cedula', 'Cedula') !!}
                        {!! Form::text('cedula', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca la cedula']) !!}
                      </div>
                </div>
                <div class="col-lg-6">
                      <div class="form-group">
                          {!! Form::label('sexo', 'Sexo') !!}
                          {!! Form::select('sexo',[''=>'Seleccione ','masculino'=>'Masculino','femenino'=>'Femenino'], null, ['class' => 'form-control'  ]) !!}
                      </div>
                </div>
              </div>  
              <div class="form-group">
                        {!! Form::label('primer_nombre', 'Primer nombre') !!}
                        {!! Form::text('primer_nombre', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca el primer nombre']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('segundo_nombre', 'Segundo nombre') !!}
                        {!! Form::text('segundo_nombre', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca el segundo nombre']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('primer_apellido', 'Primer Apellido') !!}
                        {!! Form::text('primer_apellido', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca primer apellido']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('segundo_apellido', 'Segundo Apellido') !!}
                        {!! Form::text('segundo_apellido', null, ['class' => 'form-control' , 'placeholder' => 'Por favor introduzca el segundo apellido']) !!}
                      </div>
                      
            </div>
          </section>
      </div>
    <div class="col-lg-6">
          <section class="panel">
            <div class="panel-body">
                      <div class="form-group">
                        {!! Form::label('direccion', 'Dirección') !!}
                        {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca la dirección'] ) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('telefono', 'Telefono') !!}
                        {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca el telefono']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('email', 'Correo electrónico') !!}
                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca el e-mail']) !!}
                      </div>
                      
                      <div class="form-group">
                          {!! Form::label('lider_id', 'Lider') !!}
                          {!! Form::select('lider_id',array_pluck($lideres,'name','id'), null, ['class' => 'form-control'  ]) !!}
                      </div>
                      <div class="row">
                        <div class="col-lg-8">
                          <div class="form-group">
                              {!! Form::label('puestos_votacion_id', 'Puesto de votacion') !!}
                              {!! Form::select('puestos_votacion_id',array_pluck($puestos,'nombre','id'), null, ['class' => 'form-control'  ]) !!}
                          </div>                              
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            {!! Form::label('numero_mesa', 'Número de Mesa') !!}
                            {!! Form::text('numero_mesa', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca el número de la Mesa']) !!}
                          </div>                              
                        </div>
                      </div>   

              </div>
          </section>  
      </div>
    </div>  
  </div>
</div>