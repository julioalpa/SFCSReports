{{--<div class="btn-group-vertical" role="group" aria-label="...">--}}
    <ul class="nav navbar-nav">
        @if ($currentUser->is('admin'))
            <li><a href="{{ route('home_show_path') }}">Home</a></li>
            <li><a href="{{ route('monitores_show_path') }}">Monitores</a></li>
            <li><a href="{{ route('grafico_show_path') }}">Gráficos</a></li>
            <li><a href="{{ route('historico_show_path') }}">Histórico</a></li>
        @endif
    </ul>


