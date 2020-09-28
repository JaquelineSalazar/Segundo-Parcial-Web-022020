    
    <label for="Nombre">{{'Nombre'}}</lavel>
    <input type="text" name="Nombre" id="Nombre" 
    
    value="{{ isset($producto->Nombre)?$producto->Nombre:''}}">
    </br>
    
    <label for="Tipo">{{'Tipo'}}</lavel>
    <input type="text" name="Tipo" id="Tipo" 
    value="{{ isset($producto->Tipo)?$producto->Tipo:''}}"
    >
    </br>
    
    <label for="Precio">{{'Precio'}}</lavel>
    <input type="double" name="Precio" id="Precio" 
    value="{{ isset($producto->Precio)?$producto->Precio:''}}"
    >
    </br>
    
    <label for="Stock">{{'Stock'}}</lavel>
    <input type="double" name="Stock" id="Stock" 
    value="{{ isset($producto->Stock)?$producto->Stock:''}}"
    >
    </br>
    
    <input type="submit" value="{{ $Modo=='crear' ? 'Agregar Producto':'Modificar Producto' }}">
    
    <a href="{{url('productos')}}">Regresar</a>