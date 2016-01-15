@extends('layouts.sidebar')

@section('title')
    Monitores
@endsection

@section('content')
    @include('partials.errors')

    @if(isset($config))

        <div class="container-fluid">
            <div class="row">
                <div class="container col-xs-6">

                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                {{ \SFCSReports\Planta::where(['Id' => $config->plantaVistaIzquierda])->get()->first()->Nombre  }}
                                 -
                                {{ \SFCSReports\Linea::where(['Id' => $config->lineaVistaIzquierda])->get()->first()->Nombre  }}
                            </h3>
                        </div>
                        <div class="panel-body">

                            <div class="container col-xs-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Producido</h3>
                                    </div>
                                    <div class="panel-body">
                                        <h1 style="font-size:150px"> TEST </h1>
                                    </div>
                                </div>
                            </div>

                            <div class="container col-xs-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Target</h3>
                                    </div>
                                    <div class="panel-body">
                                        <h1>{{ $config->targetVistaIzquierda  }}</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="container col-xs-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Eficiencia</h3>
                                    </div>
                                    <div class="panel-body">
                                        <h1> 80% </h1>
                                    </div>
                                </div>
                            </div>

                            <div class="container col-xs-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Rechazos</h3>
                                    </div>
                                    <div class="panel-body">
                                        <h1> 0 </h1>
                                    </div>
                                </div>
                            </div>

                            <div class="container col-xs-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Pendientes</h3>
                                    </div>
                                    <div class="panel-body">
                                        <h1> 0 </h1>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="container col-xs-6">

                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                {{ \SFCSReports\Planta::where(['Id' => $config->plantaVistaDerecha])->get()->first()->Nombre  }}
                                -
                                {{ \SFCSReports\Linea::where(['Id' => $config->lineaVistaDerecha])->get()->first()->Nombre  }}
                            </h3>
                        </div>
                        <div class="panel-body">

                            <div class="container col-xs-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Producido</h3>
                                    </div>
                                    <div class="panel-body">
                                        <h1 style="font-size:150px">{{ $config->targetVistaDerecha  }}</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="container col-xs-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Target</h3>
                                    </div>
                                    <div class="panel-body">
                                        <h1>{{ $config->targetVistaDerecha  }}</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="container col-xs-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Eficiencia</h3>
                                    </div>
                                    <div class="panel-body">
                                        <h1> 80% </h1>
                                    </div>
                                </div>
                            </div>

                            <div class="container col-xs-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Rechazos</h3>
                                    </div>
                                    <div class="panel-body">
                                        <h1> 0 </h1>
                                    </div>
                                </div>
                            </div>

                            <div class="container col-xs-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Pendientes</h3>
                                    </div>
                                    <div class="panel-body">
                                        <h1> 0 </h1>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
            @include('pages.monitor.config')
    @endif


@endsection