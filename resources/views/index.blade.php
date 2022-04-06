@include('header')
<section class="hero">
    <div class="hero-content">
        <div class="hero-text">
            <h1>Välkommen till Kollektiva!</h1>
            @if ($success = session('success'))
            <p class="success">{{ $success }}</p>
            @endif
            <p>Skapa ett konto idag, snabbt och enkelt.</p>
            <p>Här kan ni välja mellan att annonsera ert utrymme eller bara bläddra bland tillgängliga lokaler.</p>
            <a href="#">Läs mer om Kollektiva</a>
        </div>
        <div class="hero-buttons">
            <a class="button" href="{{ route('register') }}">Skapa gratiskonto</a>
            <a class="button" href="{{ route('login') }}">Logga in</a>
        </div>
    </div>
    <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80" alt="hero image">
</section>

<section class="two-card">
    <div class="option">
        <h2>För hyresvärd</h2>
        <img src="{{ asset('images/hyres.svg') }}" alt="Big icon with a hand and a house-key">
        <a class="button" href="{{ route('index') }}">Skapa annonser</a>
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
            <h3>1. Skapa konto</h3>
            <p>Du kan enkelt skapa ett konto med bara mail och lösenord, det är självklart gratis!</p>
        </div>
        <div class="option mint">
            <h3>2. Annonsera bostad</h3>
            <p>Du kan enkelt skapa ett konto med bara mail och lösenord, det är självklart gratis!</p>
        </div>
        <div class="option red">
            <h3>3. Bläddra bland ansökningar</h3>
            <p>Du kan enkelt skapa ett konto med bara mail och lösenord, det är självklart gratis!</p>
        </div>
        <div class="option purple">
            <h3>4. Kontakta genom Kollektiva</h3>
            <p>Du kan enkelt skapa ett konto med bara mail och lösenord, det är självklart gratis!</p>
        </div>
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





@include('footer')
