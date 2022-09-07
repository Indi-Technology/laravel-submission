<ul class="navbar-nav me-auto mb-2 mb-lg-0">
    @foreach ($navbar as $key => $url)
    <li class="nav-item">
        <a class="nav-link" style="font-size: 16px;" href="{{ $url }}">{{ $key }}</a>
    </li>
    @endforeach
</ul>
<a class="btn btn-primary me-2" style="font-size: 16px; font-weight:700;" href="{{ route('login') }}">LOGIN</a>
