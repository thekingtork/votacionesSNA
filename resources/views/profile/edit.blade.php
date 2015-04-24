@extends('app')
@section('menuLateral')
  @include('admin.menuLateral')
@endsection
@section('content')
    <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  @include('profile.partials.profile_partial')
                  <aside class="profile-info col-lg-9">
                      <section class="panel">
                          <div class="panel-body bio-graph-info">
                              <h1>Informacion del perfil</h1>
                              {!! Form::open([ 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form']) !!}
                              
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Primer Nombre</label>
                                      <div class="col-lg-6">
                                          <input type="text" value="{{ $user->primer_nombre }}" name="primer_nombre" class="form-control" id="f-name" placeholder=" ">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Segundo Nombre</label>
                                      <div class="col-lg-6">
                                          <input type="text" value="{{ $user->segundo_nombre }}" name="segundo_nombre" class="form-control" id="f-name" placeholder=" ">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Primer Apellido</label>
                                      <div class="col-lg-6">
                                          <input type="text" value="{{ $user->primer_apellido }}" name="primer_apellido" class="form-control" id="l-name" placeholder=" ">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Segundo Apellido</label>
                                      <div class="col-lg-6">
                                          <input type="text" value="{{ $user->segundo_apellido }}" name="segundo_apellido" class="form-control" id="l-name" placeholder=" ">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Email</label>
                                      <div class="col-lg-6">
                                          <input type="text" value="{{ $user->email }}" name="email" class="form-control" id="email" placeholder=" ">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Telefono</label>
                                      <div class="col-lg-6">
                                          <input type="text" value="{{ $user->telefono }}" name="telefono" class="form-control" id="mobile" placeholder=" ">
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="submit" class="btn btn-success">Guardar</button>
                                          <a href="{{ url('/') }}" type="button" class="btn btn-default">Cancelar</a>
                                      </div>
                                  </div>
                              {!! Form::close() !!} 
                          </div>
                      </section>
                      <section>
                          <div class="panel panel-primary">
                              <div class="panel-heading"> Cambiar contraseña</div>
                              <div class="panel-body">
                                  <form action="{{ url('/user/changepassword') }}" class="form-horizontal" role="form">
                                      <div class="form-group">
                                          <label  class="col-lg-2 control-label">Contrseña actual</label>
                                          <div class="col-lg-6">
                                              <input type="password" class="form-control" id="c-pwd" placeholder=" ">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label  class="col-lg-2 control-label">Nueva contraseña</label>
                                          <div class="col-lg-6">
                                              <input type="password" class="form-control" id="n-pwd" placeholder=" ">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label  class="col-lg-2 control-label">repite la contraseña nueva</label>
                                          <div class="col-lg-6">
                                              <input type="password" class="form-control" id="rt-pwd" placeholder=" ">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button type="submit" class="btn btn-info">Guardar</button>
                                              <a href="{{ url('/') }}" type="button" class="btn btn-default">Cancelar</a>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </section>
                  </aside>
              </div>

              <!-- page end-->
    </section>
      
@endsection