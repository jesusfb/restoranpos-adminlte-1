@extends('layouts.app')

@section('template_title')
    {{ $platillo->name ?? __('Show') . " " . __('Platillo') }}
@endsection

@section('contents')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Platillo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('platillos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $platillo->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Precio:</strong>
                                    {{ $platillo->precio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Imagen:</strong>
                                    {{ $platillo->imagen }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $platillo->estado }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
