 {!! Form::open(['route' => ['admin.lideres.destroy', $user], 'method' => 'DELETE']) !!}
 	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
           	<div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Modal Tittle</h4>
                </div>
                <div class="modal-body">
                	¿Seguro que desea eliminar?
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn btn-warning" type="button"> Confirm</button>
                </div>
            </div>
        </div>
    </div>
   <button type="submit" onclick="return confirm('Seguro que desea eliminar?')" class="btn btn-danger">Eliminar usuario</button>
 {!! Form::close() !!}