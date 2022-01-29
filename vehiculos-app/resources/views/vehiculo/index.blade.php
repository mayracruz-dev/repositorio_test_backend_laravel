@extends('layouts.app')

@section('template_title')
    Vehiculo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Vehiculo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('vehiculos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Modelo</th>
										<th>Placa</th>
										<th>Horaentrada</th>
										<th>Horasalida</th>
										<th>Tiempoestac</th>
										<th>Importe</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vehiculos as $vehiculo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $vehiculo->modelo }}</td>
											<td>{{ $vehiculo->placa }}</td>
											<td>{{ $vehiculo->horaentrada }}</td>
											<td>{{ $vehiculo->horasalida }}</td>
											<td>{{ $vehiculo->tiempoestac }}</td>
											<td>{{ $vehiculo->importe }}</td>

                                            <td>
                                                <form action="{{ route('vehiculos.destroy',$vehiculo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('vehiculos.show',$vehiculo->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('vehiculos.edit',$vehiculo->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $vehiculos->links() !!}
            </div>
        </div>
    </div>
@endsection
