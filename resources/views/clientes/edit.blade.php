@extends('layouts.app')
  

@section('contents')
    <h1 class="mb-0">Editar Cliente</h1>
    <hr />
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ $cliente->nombre }}" >
            </div>
            <div class="col">
                <input type="text" name="correoelectronico" class="form-control" placeholder="Correo electrónico"  value="{{ $cliente->correoelectronico }}" >
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="telefono" class="form-control" placeholder="Telefono"  value="{{ $cliente->telefono }}" >
            </div>
            <div class="col">
                <textarea class="form-control" name="direccion" placeholder="Direccón">{{ $cliente->direccion }}</textarea>
            </div>
        </div>    
        </div>
       
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Actualizar</button>
            </div>
        </div>
    </form>
@endsection