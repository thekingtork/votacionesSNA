                      <div class="form-group">
                        {!! Form::label('primer_nombre', 'Primer nombre') !!}
                        {!! Form::text('primer_nombre', null, ['class' => 'form-control']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('segundo_nombre', 'Segundo nombre') !!}
                        {!! Form::text('segundo_nombre', null, ['class' => 'form-control']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('primer_apellido', 'Primer Apellido') !!}
                        {!! Form::text('primer_apellido', null, ['class' => 'form-control']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('segundo_apellido', 'Segundo Apellido') !!}
                        {!! Form::text('segundo_apellido', null, ['class' => 'form-control']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('telefono', 'Telefono') !!}
                        {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su telefono']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('email', 'Correo electrónico') !!}
                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su e-mail']) !!}
                      </div>
                      <div class="form-group">
                         {!! Form::label('password', 'Contraseña') !!}
                         {!! Form::password('password', ['class' => 'form-control']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('tipo_usuario_id', 'Tipo de usuario') !!}
                        {!! Form::select('tipo_usuario_id',[''=>'Seleccione Tipo','1'=>'Administrador','2'=>'Lider','3'=>'Votante'], null, ['class' => 'form-control']) !!}
                      </div>