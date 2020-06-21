@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>ENLACES</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
            <!--<div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                <div class="alert alert-success" role="alert">
{{ session('status') }}
                    </div>
@endif

                You are logged in!
            </div>
        </div>-->
                <a href="https://www.bcb.gob.bo/?q=servicios/ufv/datos_estadisticos" target="_blank" class="btn btn-block btn-lg btn-success">
                    <span class="fa fa-bold"></span>
                    UFV DE HOY
                </a>
                <a href="https://www.bcb.gob.bo/?q=cotizaciones_tc" target="_blank" class="btn btn-block btn-lg btn-success">
                    <span class="fa fa-dollar-sign"></span>
                    DOLAR DE HOY
                </a>
                <a href="https://www.bcb.gob.bo/?q=cotizaciones_tc" target="_blank" class="btn btn-block btn-lg btn-success">
                    <span class="fa fa-euro-sign"></span>
                    EURO DE HOY
                </a>
                <hr>

            </div>
        </div>
    </div>
@endsection
