@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <br>
                <div class="card">
                    <div class="card-header">
                        <h3>REGISTRAR</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('ufvs.store') }}" method="post" enctype="multipart/form-data"
                              class="form-horizontal">
                            @csrf
                            <div class="form-group">
                                <label for="ufv_fecha">Fecha</label>
                                <input type="date" id="ufv_fecha" name="ufv_fecha" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                                       class="form-control @error('ufv_fecha') is-invalid @enderror">
                                @error('ufv_fecha')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!--ufv-->
                            <div class="form-group">
                                <label for="ufv_valor">Ufv</label>
                                <input type="number" id="ufv_valor" name="ufv_valor" step="0.00001"
                                       class="form-control @error('ufv_valor') is-invalid @enderror">
                                @error('ufv_valor')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!--dolar-->
                            <div class="form-group">
                                <label for="dolar_valor">Dolar</label>
                                <input type="number" id="dolar_valor" name="dolar_valor" step="0.01"
                                       class="form-control @error('dolar_valor') is-invalid @enderror">
                                @error('dolar_valor')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!--euro-->
                            <div class="form-group">
                                <label for="euro_valor">Euro</label>
                                <input type="number" id="euro_valor" name="euro_valor" step="0.01"
                                       class="form-control @error('euro_valor') is-invalid @enderror">
                                @error('euro_valor')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group options text-right">
                                <button class="btn btn-primary">REGISTRAR</button>
                                <a href="{{ url('/ufvs') }}" class="btn btn-default">CANCELAR</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
