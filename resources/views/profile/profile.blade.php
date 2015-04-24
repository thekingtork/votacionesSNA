@extends('app')

@section('content')
    <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  @include('profile.partials.profile_partial')
                  <aside class="profile-info col-lg-9">
                      <section class="panel">
                          <div class="panel-body bio-graph-info">
                              <h1>Biografia</h1>
                              <div class="row">
                                  <div class="bio-row">
                                      <p><span>Nombre </span>: {{ $user->primer_nombre }} {{ $user->segundo_nombre }}</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Apellidos </span>: {{ $user->primer_apellido }} {{ $user->segundo_apellido }}</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Telefono </span>: {{ $user->telefono }}</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Correo </span>: {{ $user->email }}</p>
                                  </div>
                              </div>
                          </div>
                      </section>
                  </aside>
              </div>

              <!-- page end-->
    </section>
@endsection