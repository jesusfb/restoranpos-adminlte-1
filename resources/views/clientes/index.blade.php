@extends('layouts.app')
  

  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Clientes</h1>
        <a href="{{ route('clientes.create') }}" class="btn btn-primary">Nuevo</a>
    </div>
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Clientes</h1>
        <a href="{{ route('clientes.imprimir') }}" class="btn btn-warning">Ver factura</a>
    </div>
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Clientes</h1>
        <a href="{{ route('clientes.imprimirpdf') }}" class="btn btn-danger">PDF factura</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nombre</th> 
                <th>Correo Electrónico</th> 
                <th>Telefono</th> 
                <th>Dirección</th>                                
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if($cliente->count() > 0)
                @foreach($cliente as $rs)
                    <tr>
                        <td class="align-middle">{{ $rs->id }}</td>
                        <td class="align-middle">{{ $rs->nombre }}</td>
                        <td class="align-middle">{{ $rs->correoelectronico }}</td>
                        <td class="align-middle">{{ $rs->telefono }}</td>
                        <td class="align-middle">{{ $rs->direccion }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('clientes.show', $rs->id) }}" type="button" class="btn btn-secondary">Detalle</a>
                                <a href="{{ route('clientes.edit', $rs->id)}}" type="button" class="btn btn-warning">Actualizar</a>
                                <form action="{{ route('clientes.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection