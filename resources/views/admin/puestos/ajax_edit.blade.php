@include('admin.partials.messages')
{!! Form::model($user,['route' => ['administrador.puestos.update',$user->id], 'method' => 'PUT']) !!}
<div class="modal-body">
  <div class="panel-body">
    @include('admin.puestos.partials.fields')
  </div>                  
</div>
<div class="modal-footer">
  <button type="submit" class="btn btn-success">Editar puesto de votacion</button>
  <button data-dismiss="modal" class="btn btn-danger" type="button">Cerrar</button>
</div>
{!! Form::close() !!} 