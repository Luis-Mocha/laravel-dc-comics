<header class="container">

    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo header">

    <nav>

        <ul>
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('comics') }}">Comics</a>
            </li>
            <li>
                <a href="#">Movies</a>
            </li>
            <li>
                <a href="#">Tv</a>
            </li>
            <li>
                <a href="#">Games</a>
            </li>
            <li>
                <a href="#">collectibles</a>
            </li>
            <li>
                <a href="#">videos</a>
            </li>
            <li>
                <a href="#">fans</a>
            </li>
            <li>
                <a href="#">news</a>
            </li>
            <li>
                <a href="#">shop</a>
            </li>
        </ul>

    </nav>

    <div id="header-input" class="input-group">
        <input id="search-input" type="text" placeholder="Search" class="form-control" autocomplete="off">
        <span for="search-input" class="input-group-text">
            <i class="fa-solid fa-magnifying-glass text-black"></i>
        </span>
    </div>

</header>