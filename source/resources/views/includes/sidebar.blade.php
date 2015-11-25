<ul class="list-group">
    @if ($currentUser->is('admin'))
        <li class="list-group-item"><a href="{{ route('home_show_path') }}">Home</a></li>
    @endif
</ul>

