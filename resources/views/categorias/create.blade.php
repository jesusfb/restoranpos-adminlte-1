@extends('layouts.app')
  
@section('title', 'Nueva categoria')
  
@section('contents')
    <h1 class="mb-0">Add Product</h1>
    <hr />
    <form action="{{ route('categorias.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre">
            </div>            
        </div>
         
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
@endsection