@extends('layouts.app')
  
@section('title', 'Editar CAtegoria')
  
@section('contents')
    <h1 class="mb-0">Editar Categoria</h1>
    <hr />
    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ $categoria->nombre }}" >
            </div>           
        </div>
       
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Actualizar</button>
            </div>
        </div>
    </form>
@endsection