                      <div class="form-group">
                        {!! Form::label('cedula', 'Cedula') !!}
                        {!! Form::text('cedula', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca la cedula']) !!}
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
                      <div class="form-group">
                        {!! Form::label('telefono', 'Telefono') !!}
                        {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca el telefono']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('email', 'Correo electrónico') !!}
                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca el e-mail']) !!}
                      </div>
                      <div class="form-group">
                          {!! Form::label('sexo', 'Sexo') !!}
                          {!! Form::select('sexo',[''=>'Seleccione ','masculino'=>'masculino','femenino'=>'femenino'], null, ['class' => 'form-control'  ]) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('direccion', 'Dirección') !!}
                        {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca la dirección'] ) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('sufrago', 'Sufrago') !!}
                        {!! Form::text('sufrago', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca el sufrago'] ) !!}
                      </div>
                      <div class="form-group">
                          {!! Form::label('lider_id', 'Lider') !!}
                          {!! Form::select('lider_id',array_pluck($lideres,'name','id'), null, ['class' => 'form-control'  ]) !!}
                      </div>
                      <div class="form-group">
                          {!! Form::label('puestos_votacion_id', 'Puestos de votacion') !!}
                          {!! Form::select('puestos_votacion_id',array_pluck($puestos,'nombre','id'), null, ['class' => 'form-control'  ]) !!}
                      </div>