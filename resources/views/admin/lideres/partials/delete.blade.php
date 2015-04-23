
 {!! Form::open(['route' => ['admin.lideres.destroy', $user], 'method' => 'DELETE']) !!}
   <button type="submit" onclick="return confirm('Seguro que desea eliminar?')" class="btn btn-danger">Eliminar usuario</button>
 {!! Form::close() !!}