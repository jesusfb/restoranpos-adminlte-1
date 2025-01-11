@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Sala
@endsection

@section('contents')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Sala</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('salas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('salas.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
