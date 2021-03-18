@section('title')
    Eliminar proyecto
@endsection
@section('body')
    <a>Ingrese los datos del proyecto a eliminar</a>
    <label>
        Nombre del proyecto
        <input tipe='text'name="nameproject">
    </label>
    <label>
        Descripcion del proyecto
        <textarea rows="5" name="descripcion">
    </label>
    <label>
        Seleccionar colaborador
        <input tipe='text'name="colaborador">
    </label>
    <label>
        Estado
        <input tipe='text' name="estado"> 
    </label>
    <button type="submit">Crear</button>
@endsection