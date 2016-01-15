<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><img style="max-width:100px; margin-top: -7px;" src="http://localhost:8000/images/logo.png"></a>
        </div>

        <div>
            <ul class="nav navbar-nav navbar-right">
                @if($currentUser)
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> {{ $currentUser->name }}</a></li>
                    <li><a href="{{ route('auth_destroy_path') }}"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
                @else
                    <li><a href="{{ route('auth_show_path') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                @endif
            </ul>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <ul class="nav nav-pills nav-justified">
                @if($currentUser)
                    @if ($currentUser->is('admin'))
                        <li><a href="{{ route('home_show_path') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="{{ route('monitores_show_path') }}"><span class="glyphicon glyphicon-stats"></span> Monitores</a></li>
                        <li><a href="{{ route('grafico_show_path') }}"><span class="glyphicon glyphicon-signal"></span> Gráficos</a></li>
                        <li><a href="{{ route('historico_show_path') }}"><span class="glyphicon glyphicon-search"></span> Histórico</a></li>
                    @endif
                @endif
            </ul>
        </div>

    </div>
</nav>