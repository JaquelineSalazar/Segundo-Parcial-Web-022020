Sección para crear productos

<form action="{{ url('/productos')}}" method="post" enctype="multipart/form-data">
@csrf

@include('productos.form',['Modo'=>'crear'])

</form>