<header>
    <div class="container">

        {{-- LOGO --}}
        <div class="logo">
            <a href="{{ route('home') }}">
                <strong>AsiaTours</strong>
            </a>
        </div>

        {{-- MAIN NAV --}}
        <nav>
            <ul class="main-menu">

                <li>
                    <a href="{{ route('tours.index') }}">Tours</a>
                </li>

                {{-- DESTINATIONS --}}
                <li class="has-mega">
                    <a href="#">Destinations</a>
                    <div class="mega-menu">
                        <ul>
                            @foreach($allDestinations ?? [] as $d)
                                <li>
                                    <a href="{{ route('destinations.show',$d->slug) }}">
                                        {{ $d->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>

                {{-- EXPERIENCES --}}
                <li class="has-mega">
                    <a href="#">Experiences</a>
                    <div class="mega-menu">
                        <ul>
                            @foreach($allExperiences ?? [] as $e)
                                <li>
                                    <a href="{{ route('experiences.show',$e->slug) }}">
                                        {{ $e->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="/about">Why Us</a>
                </li>

                <li>
                    <a href="/contact">Contact</a>
                </li>

            </ul>
        </nav>

        {{-- USER --}}
        <div class="user-menu">
            @auth
                <a href="{{ route('wishlist.index') }}">Wishlist</a>
                <span>{{ auth()->user()->name }}</span>
            @else
                <a href="/login">Login</a>
            @endauth
        </div>

    </div>
</header>
