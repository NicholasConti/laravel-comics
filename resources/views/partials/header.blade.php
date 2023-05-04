<header>
    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
    <ul>
        {{-- ADD CLASS ACTIVE IF ROUTE IS = home/ detal --}}
        <li class="{{ Str::startsWith(Route::currentRouteName(), 'home') ? 'active' : '' }}"><a href="#">characters</a></li>
        <li class="{{ Str::startsWith(Route::currentRouteName(), 'detail') ? 'active' : '' }}"><a href="#">comics</a></li>
        <li><a href="#">movies</a></li>
        <li><a href="#">tv</a></li>
        <li><a href="#">games</a></li>
        <li><a href="#">collectibles</a></li>
        <li><a href="#">videos</a></li>
        <li><a href="#">fans</a></li>
        <li><a href="#">news</a></li>
        <li><a href="#">shop</a></li>
    </ul>
</header>