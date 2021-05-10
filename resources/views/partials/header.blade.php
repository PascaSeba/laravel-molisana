<header>
    <div class="header_container">
        <img class="logo" src="{{ asset('img/logo.png') }}">
        <nav>
            <ul class="menu">
                <li>
                    <a href="{{ route('pagina-home') }}"
                        class="{{ Request::route()->getName() == 'pagina-home' ? 'active' : '' }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('pagina-news') }}"
                        class="{{ Request::route()->getName() == 'pagina-news' ? 'active' : '' }}">News</a>
                </li>
                <li>
                    <a href="{{ route('pagina-prodotti') }}"
                        class="{{ Request::route()->getName() == 'pagina-prodotti' ? 'active' : '' }}">Prodotti</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
