@extends('layouts.app')
@section('content')
    <div class="container col-md-8 offset-md-2">
        <div class="pb-3">
            <a href="{{ url('ufvs/create') }}" class="btn btn-primary btn-sm">
                <span class="fa fa-plus"></span>
                Registrar
            </a>
        </div>
        <div class="card">
            <div class="card-header">
                <h3>LISTADO DE UFVS Y TIPOS DE CAMBIO</h3>
            </div>
            <div class="card-body">
                <!--<alert type="info" *ngIf="ufvState.loading">
                  Cargando Listado de UFVs
                </alert>-->
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>N.</th>
                            <th>Fecha</th>
                            <th>Ufv</th>
                            <th>Dolar</th>
                            <th>Euro</th>
                            <!--<th>Acciones</th>-->
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ufvs as $ufv)
                            <tr>
                                <td>{{ ($ufvs->currentPage() - 1) * $ufvs->perPage() + $loop->index + 1 }}</td>
                                <td>{{ $ufv->ufv_fecha }}</td>
                                <td>{{ $ufv->ufv_valor }}</td>
                                <td>{{ $ufv->dolar_valor }}</td>
                                <td>{{ $ufv->euro_valor }}</td>
                                <!--<td>
                                    <div class="btn-group">
                                        <a class="btn btn-border-none btn-sm btn-outline-success "
                                           href="{{ url('ufvs/'.$ufv->idufv.'/edit') }}"
                                           data-toggle="tooltip"
                                           data-placement="top" title="Editar">
                                            <span class="fa fa-pencil-alt"></span>
                                        </a>
                                        <form class="float-right"
                                              action="{{ route('ufvs.destroy',$ufv->idufv)}}" method="POST"
                                              onclick="return confirm('Estas seguro de que desea eliminar?')">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit"
                                                    class="btn btn-border-none btn-sm btn-outline-danger">
                                                <span class="fa fa-trash"></span>
                                            </button>
                                        </form>
                                    </div>
                                </td>-->
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $ufvs->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
