@extends('layout.plantilla')
@section('title')
    Crear proyecto
@endsection
@section('body')
    <form>
        @csrf
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
    </form>
@endsection