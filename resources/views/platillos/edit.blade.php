@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Platillo
@endsection

@section('contents')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Platillo</span>
                    </div>
                    <div class="card-body bg-white">
                       
                        <form method="POST" action="{{ route('platillos.update', $platillo->id) }}"  role="form" enctype="multipart/form-data">{{ method_field('PUT') }}
                            @csrf

                            @include('platillos.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
