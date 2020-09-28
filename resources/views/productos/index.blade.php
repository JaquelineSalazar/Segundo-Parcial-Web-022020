@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif

<a href="{{url('productos/create')}} ">Agregar Producto</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach($productos as $producto)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $producto->Nombre}}</td>
            <td>{{ $producto->Tipo}}</td>
            <td>{{ $producto->Precio}}</td>
            <td>{{ $producto->Stock}}</td>
            <td>
                <a href="{{url('/productos/'.$producto->id.'/edit') }}">
                    Editar
                </a>
                 | 
                <form method="post" action="{{url('/productos/'.$producto->id) }}">
                @csrf 
                {{method_field('DELETE') }}  
                <button type="submit" onclick="return confirm('¿Desea eliminarlo?');">Borrar</button>
                </form>
            </td>

        </tr>
    @endforeach
    </tbody>

</table>
</div>
@endsection
