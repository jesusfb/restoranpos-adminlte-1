@extends('layouts.app')
  

  
@section('contents')
    <h1 class="mb-0">Agregar Cliente</h1>
    <hr />
    <form action="{{ route('clientes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="col">
                <input type="text" name="correoelectronico" class="form-control" placeholder="Correo electrónico">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="telefono" class="form-control" placeholder="Telefono">
            </div>
            <div class="col">
                <textarea class="form-control" name="direccion" placeholder="Direccón"></textarea>
            </div>
        </div>
         
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
@endsection