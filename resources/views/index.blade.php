@include('partials.header')

<section class="hero">
    @if (Auth::guest())
    @else
    <div class="profile-container">
        <h3>Hej {{ Auth::user()->first_name }} </h3>
        <div class="profile-content">
            <div class="profile-links">
                <a href="#">
                <svg width="30" height="30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 10.666a5.333 5.333 0 1 1-10.667 0 5.333 5.333 0 0 1 10.667 0Zm-2.667 0a2.667 2.667 0 1 1-5.333 0 2.667 2.667 0 0 1 5.333 0Z" fill="#F9FAFB"/><path fill-rule="evenodd" clip-rule="evenodd" d="M14.667 0C6.567 0 0 6.567 0 14.667s6.567 14.666 14.667 14.666 14.666-6.566 14.666-14.666C29.333 6.567 22.767 0 14.667 0Zm-12 14.667c0 2.786.95 5.352 2.544 7.389a11.982 11.982 0 0 1 9.542-4.723 11.98 11.98 0 0 1 9.456 4.611 12 12 0 1 0-21.542-7.277Zm12 12a11.951 11.951 0 0 1-7.563-2.683A9.323 9.323 0 0 1 14.754 20a9.32 9.32 0 0 1 7.585 3.893 11.952 11.952 0 0 1-7.672 2.774Z" fill="#F9FAFB"/></svg>
                    Min profil
                </a>
                <a href="#">
                <svg width="35" height="32" fill="none"><path d="M24.334 31.333H3a2.667 2.667 0 0 1-2.667-2.666V12.55A2.667 2.667 0 0 1 3 10h21.334A2.667 2.667 0 0 1 27 12.667v16a2.667 2.667 0 0 1-2.666 2.666ZM3 15.157v13.51h21.334v-13.51l-10.667 7.11L3 15.157Zm1.067-2.49 9.6 6.4 9.6-6.4h-19.2Z" fill="#F9FAFB"/><rect x="15" width="20" height="20" rx="10" fill="#E21212"/><path d="M19.98 14.08c.9 1.2 2.66 2.16 5.04 2.16 3.08 0 5.02-1.62 5.02-3.88 0-2.06-1.8-3.12-3.1-3.24 1.38-.24 2.9-1.28 2.9-3.06 0-2.24-1.94-3.6-4.82-3.6-2.22 0-3.84.9-4.86 2.1l1.2 1.46c.96-.96 2.08-1.48 3.44-1.48 1.5 0 2.7.64 2.7 1.88 0 1.22-1.18 1.76-2.74 1.76-.52 0-1.3 0-1.54-.02v2.1c.2-.02.98-.02 1.54-.02 1.9 0 2.96.56 2.96 1.88 0 1.24-1.02 2.04-2.78 2.04-1.42 0-2.84-.62-3.7-1.62l-1.26 1.54Z" fill="#F9FAFB"/></svg>
                    Meddelanden</a>
            </div>
            <div class="profile-image">
                <img src="https://images.unsplash.com/photo-1590031905406-f18a426d772d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2144&q=80" alt="">
            </div>
        </div>
    </div>
    @endif
    <div class="hero-content">
        <div class="hero-text">
            <h1>Välkommen till Kollektiva!</h1>
            <p>Skapa ett konto idag, snabbt och enkelt.</p>
            <p>Här kan ni välja mellan att annonsera ert utrymme eller bara bläddra bland tillgängliga lokaler.</p>
            <a href="#">Läs mer om Kollektiva</a>
        </div>
        @if (Auth::guest())
        <div class="hero-buttons">
            <a class="button" href="{{ route('register') }}">Skapa gratiskonto</a>
            <a class="button" href="{{ route('login') }}">Logga in</a>
        </div>
        @else
        @endif
    </div>
    <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80" alt="hero image">
</section>

<section class="two-card">
    <div class="option">
        <h2>För hyresvärd</h2>
        <img src="{{ asset('images/hyres.svg') }}" alt="Big icon with a hand and a house-key">
        <a class="button" href="{{ route('ad') }}">Skapa annonser</a>
    </div>
    <div class="option">
        <h2>För Bostadssökande</h2>
        <img src="{{ asset('images/bostads.svg') }}" alt="Big icon a house and a place pin">
        <a class="button" href="{{ route('index') }}">Bläddra bland annonser</a>
    </div>
</section>

<section class="four-card">
    <h2>Hur funkar det?</h2>
    <div class="option-container">
        <div class="option yellow">
            <div class="option-top">
                <h2>1.</h2>
                <h3>Skapa konto</h2>
            </div>
            <p>Du kan enkelt skapa ett konto med bara mail och lösenord, det är självklart gratis!</p>
        </div>
        <div class="option mint">
            <div class="option-top">
                <h2>2.</h2>
                <h3>Annonsera bostad</h3>
            </div>
            <p>Du kan enkelt skapa ett konto med bara mail och lösenord, det är självklart gratis!</p>

        </div>
        <div class="option red">
            <div class="option-top">
                <h2>3.</h2>
                <h3>Bläddra bland ansökningar</h3>
            </div>
            <p>Du kan enkelt skapa ett konto med bara mail och lösenord, det är självklart gratis!</p>
        </div>


        <div class="option purple">
            <div class="option-top">
                <h2>4.</h2>
                <h3>Kontakta genom Kollektiva</h2>
            </div>
            <p>Du kan enkelt skapa ett konto med bara mail och lösenord, det är självklart gratis!</p>
        </div>

</section>

<section class="update-profile-card">
    <div class="update-container">
        <div class="update-image">
            <img src="https://images.unsplash.com/photo-1556020685-ae41abfc9365?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3387&q=80" alt="update image">
        </div>
        <div class="update-text">
            <h2>Uppdatera din profil redan idag</h2>
            <p>För en mer optimal upplevelse, och för att dra nytta av Kollektivas matchningssystem finns valet att ställa in preferenser för att göra letandet så mycket enklare.</p>
            <button>Uppdatera min profil</button>
        </div>
    </div>
</section>

<section class="review-cards">
    <h1>Omdömen och recensioner</h1>
    <div class="review-container">
        <div class="review">
            <div class="user-card">
                <img src="https://images.unsplash.com/photo-1504257432389-52343af06ae3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80" alt="profile-image">
            </div>
            <div class="user-info yellow">
                <div class="name">
                    <h2>John, 65</h2>
                </div>
                <div class="status">
                    <h2>Pensionär</h2>
                </div>
            </div>
            <div class="user-content">
                <div class="review-star">
                    <img src="{{ asset('images/rating.svg') }}" alt="review stars" />
                </div>
                <div class="review-text">
                    <h2>Lorem ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempor consectetur laoreet tellus libero ornare proin feugiat.</p>
                    <a class="button" href="{{ route('index') }}">Läs fler omdömen</a>
                </div>
            </div>

        </div>
        <div class="review">
            <div class="user-card">
                <img src="https://images.unsplash.com/photo-1504257432389-52343af06ae3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80" alt="profile-image">
            </div>
            <div class="user-info mint">
                <div class="name">
                    <h2>John, 65</h2>
                </div>
                <div class="status">
                    <h2>Pensionär</h2>
                </div>
            </div>
            <div class="user-content">
                <div class="review-star">
                    <img src="{{ asset('images/rating.svg') }}" alt="review stars" />
                </div>
                <div class="review-text">
                    <h2>Lorem ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempor consectetur laoreet tellus libero ornare proin feugiat.</p>
                    <a class="button" href="{{ route('index') }}">Läs fler omdömen</a>
                </div>
            </div>


        </div>
        <div class="review">
            <div class="user-card">
                <img src="https://images.unsplash.com/photo-1504257432389-52343af06ae3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80" alt="profile-image">
            </div>
            <div class="user-info red">
                <div class="name">
                    <h2>John, 65</h2>
                </div>
                <div class="status">
                    <h2>Pensionär</h2>
                </div>
            </div>
            <div class="user-content">
                <div class="review-star">
                    <img src="{{ asset('images/rating.svg') }}" alt="review stars" />
                </div>
                <div class="review-text">
                    <h2>Lorem ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempor consectetur laoreet tellus libero ornare proin feugiat.</p>
                    <a class="button" href="{{ route('index') }}">Läs fler omdömen</a>
                </div>
            </div>

        </div>
        <div class="review">
            <div class="user-card">
                <img src="https://images.unsplash.com/photo-1504257432389-52343af06ae3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80" alt="profile-image">
            </div>
            <div class="user-info purple">
                <div class="name">
                    <h2>John, 65</h2>
                </div>
                <div class="status">
                    <h2>Pensionär</h2>
                </div>
            </div>
            <div class="user-content">
                <div class="review-star">
                    <img src="{{ asset('images/rating.svg') }}" alt="review stars" />
                </div>
                <div class="review-text">
                    <h2>Lorem ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempor consectetur laoreet tellus libero ornare proin feugiat.</p>
                    <a class="button" href="{{ route('index') }}">Läs fler omdömen</a>
                </div>
            </div>
        </div>
</section>





@include('partials.footer')
