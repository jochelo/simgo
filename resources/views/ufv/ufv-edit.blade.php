@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <br>
                <div class="card">
                    <div class="card-header">
                        <h3>EDITAR MONEDA</h3>
                    </div>
                    <div class="card-body">
                        {!! Form::model($ufv,['url' => ['/ufvs',$ufv->idufv], 'method' => 'PATCH','encrypt'=>'multipart/form-data','class' => 'form-horizontal','files' => true]) !!}
                        @csrf
                        <div class="form-group">
                            <label for="ufv_fecha">Fecha</label>
                            {!! Form::date('ufv_fecha', null, ['id'=>'ufv_fecha','class'=>'form-control'] ) !!}
                        </div>
                        <!--ufv-->
                        <div class="form-group">
                            <label for="ufv_valor">Ufv</label>
                            {!! Form::number('ufv_valor', null, ['id'=>'ufv_valor','class'=>'form-control', 'step'=>'0.00001'] ) !!}
                        </div>
                        <!--dolar-->
                        <div class="form-group">
                            <label for="dolar_valor">Dolar</label>
                            {!! Form::number('dolar_valor', null, ['id'=>'dolar_valor','class'=>'form-control', 'step'=>'0.01'] ) !!}
                        </div>
                        <!--euro-->
                        <div class="form-group">
                            <label for="euro_valor">Euro</label>
                            {!! Form::number('euro_valor', null, ['id'=>'euro_valor','class'=>'form-control', 'step'=>'0.01'] ) !!}
                        </div>
                        <div class="form-group options text-right">
                            <button class="btn btn-primary">ACTUALIZAR</button>
                            <a href="{{ url('/ufvs') }}" class="btn btn-default">CANCELAR</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
