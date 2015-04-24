@if ($errors->any())
    <div class="alert alert-block alert-danger fade in">
        <button data-dismiss="alert" class="close close-sm" type="button">
            <i class="fa fa-times"></i>
        </button>
        <strong>Oh no!</strong> se han detectado los siguientes errores corrigelos e intenta nuevamente:
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
    </div>
@endif


                                  
                                  
                             