@extends('layouts.sidebar')

@section('title')
    Monitores
@endsection

@section('content')
    @include('partials.errors')

    @if(isset($plantas))
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Modelo</h3>
        </div>
        <div class="panel-body">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Target</h3>
                </div>
                <div class="panel-body">
                    andara?
                </div>
            </div>
        </div>
    </div>
        @else
            @include('partials.monitorconfig')
    @endif


@endsection