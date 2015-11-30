<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-ex1-collapse">
                <span class="sr-only">Desplegar navegación</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="http://localhost:8000/images/logo.png"></a>
        </div>


        <ul class="nav navbar-nav navbar-right">
            @if($currentUser)
                <li><span class="glyphicon glyphicon-user"></span> Usuario: {{ $currentUser->name }}</li>
                <li><a href="{{ route('auth_destroy_path') }}"><span class="glyphicon glyphicon-log-out"></span>Salir</a></li>
            @else
                <li><a href="{{ route('auth_show_path') }}"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
            @endif
        </ul>

        <!-- Collect the nav links, forms, and other content for toggling -->

        <ul class="nav nav-pills nav-justified">
            @if($currentUser)
                @if ($currentUser->is('admin'))
                    <li><a href="{{ route('home_show_path') }}">Home</a></li>
                    <li><a href="{{ route('monitores_show_path') }}">Monitores</a></li>
                    <li><a href="{{ route('grafico_show_path') }}">Gráficos</a></li>
                    <li><a href="{{ route('historico_show_path') }}">Histórico</a></li>
                @endif
            @endif
        </ul>

    </div>
</nav>