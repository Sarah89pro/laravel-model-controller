<!--Header-->
<header>
    <nav class="container">
        <ul>
            <li><a class="@if (request()->route()->getName() == 'home') {{ 'active'}}
                @endif"
                href="{{ route('home')}}">Home</a></li>

            <li><a class="@if (request()->route()->getName() == 'contatti') {{ 'active'}}
                @endif"
                href="{{ route('contatti')}}">Contatti</a></li>
                
            <li><a class="@if (request()->route()->getName() == 'movies') {{ 'active'}}
                @endif"
                href="{{ route('movies')}}">Movies</a></li>
        </ul>
    </nav>
</header>