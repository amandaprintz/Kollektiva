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
    <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3000&q=80" alt="hero image">
</section>

<section class="two-card">
    <div class="option">
        <h2>För hyresvärd</h2>

        <button>Skapa annonser</button>
    </div>
    <div class="option">
        <h2>För Bostadssökande</h2>

        <button>Bläddra bland annonser</button>
    </div>
</section>

<section class="four-card">
    <h1>Hur funkar det?</h1>
    <div class="option-container">
        <div class="option">
            <h2>1. Skapa konto</h2>
            <p>Du kan enkelt skapa ett konto med bara mail och lösenord, det är självklart gratis!</p>
        </div>
        <div class="option">
            <h2>2. Annonsera bostad</h2>
            <p>Du kan enkelt skapa ett konto med bara mail och lösenord, det är självklart gratis!</p>
        </div>
        <div class="option">
            <h2>3. Bläddra bland ansökningar</h2>
            <p>Du kan enkelt skapa ett konto med bara mail och lösenord, det är självklart gratis!</p>
        </div>
        <div class="option">
            <h2>4. Kontakta genom Kollektiva</h2>
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
            <h3>Uppdatera din profil idag</h3>
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
            <div class="user-info">
                <h3>John, 65</h3>
                <h4>Pensionär</h4>
            </div>

        </div>
        <div class="review">
            <div class="user-card">
                <img src="https://images.unsplash.com/photo-1504257432389-52343af06ae3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80" alt="profile-image">
            </div>
            <div class="user-info">
                <h3>John, 65</h3>
                <h4>Pensionär</h4>
            </div>


        </div>
        <div class="review">
            <div class="user-card">
                <img src="https://images.unsplash.com/photo-1504257432389-52343af06ae3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80" alt="profile-image">
            </div>
            <div class="user-info">
                <h3>John, 65</h3>
                <h4>Pensionär</h4>
            </div>

        </div>
        <div class="review">
            <div class="user-card">
                <img src="https://images.unsplash.com/photo-1504257432389-52343af06ae3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80" alt="profile-image">
            </div>
            <div class="user-info">
                <h3>John, 65</h3>
                <h4>Pensionär</h4>
            </div>

        </div>
</section>





@include('footer')
