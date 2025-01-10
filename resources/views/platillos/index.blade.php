@extends('layouts.app')

@section('template_title')
    Platillos
@endsection

@section('contents')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Platillos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('platillos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Nombre</th>
									<th >Precio</th>
									<th >Imagen</th>
									<th >Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($platillos as $platillo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $platillo->nombre }}</td>
										<td >{{ $platillo->precio }}</td>
										<td >{{ $platillo->imagen }}</td>
										<td >{{ $platillo->estado }}</td>

                                            <td>
                                                <form action="{{ route('platillos.destroy', $platillo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('platillos.show', $platillo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('platillos.edit', $platillo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $platillos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
