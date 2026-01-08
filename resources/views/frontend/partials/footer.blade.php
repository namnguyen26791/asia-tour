<footer>
    <div class="container">

        <section>
            <h3>About AsiaTours</h3>
            <p>
                AsiaTours is a leading travel company specializing in
                tailor-made private tours across Asia.
            </p>
        </section>

        <section>
            <h3>Top Destinations</h3>
            <ul>
                @foreach($allDestinations ?? [] as $d)
                    <li>
                        <a href="{{ route('destinations.show',$d->slug) }}">
                            {{ $d->name }} Tours
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>

        <section>
            <h3>Travel Themes</h3>
            <ul>
                @foreach($allExperiences ?? [] as $e)
                    <li>
                        <a href="{{ route('experiences.show',$e->slug) }}">
                            {{ $e->name }} Tours
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>

        <section>
            <h3>Contact</h3>
            <p>Email: info@asiatours.com</p>
            <p>Phone: +84 123 456 789</p>
        </section>

        <section class="copyright">
            <p>© {{ date('Y') }} AsiaTours. All rights reserved.</p>
        </section>

    </div>
</footer>
