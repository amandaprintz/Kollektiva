@include('header')

<main>
    <section class="login">
        <div class="login-container">
            @if ($errors->any())
            <p>
                <p class="error">{{ $errors->first() }}</p>
            </p>
            @endif
            <div class="login-intro">
                <h2>Välkommen!</h2>
                <p>Logga in för att skapa en annons eller leta efter boende idag</p>
            </div>
            <div class="login-form">
                <form method="post" action="/login">
                    @csrf
                    <div>
                        <label for="email">E-postadress</label><br>
                        <input name="email" id="email" type="email" placeholder="Ange din e-postadress" />
                    </div>
                    <div>
                        <label for="password">Lösenord</label><br>
                        <input name="password" id="password" type="password" placeholder="Ange ditt lösenord" />
                    </div>
                    <div class="button-container">
                        <button class="button" type="submit">Logga in</button>
                        <button class="button facebook" type="submit"><img src="{{ asset('images/google.svg') }}" alt="">Logga in med Google</button>
                        <button class="button google" type="submit"><img src="{{ asset('images/facebook.svg') }}" alt="">Logga in med Facebook</button>
                        <button class="button google" type="submit"><img src="{{ asset('images/mobilt-bankid.svg') }}" alt="">Logga in med Facebook</button>
                    </div>
                </form>
                <p>Inte medlem än? <a href="{{ route('register') }}">Skapa ett konto</a> idag!</p>
            </div>
        </div>
        <div class="image-container">
            <div class="frame">
                <div class="text-content">
                    <h2>Kollektiva</h2>
                    <p>Där dina drömmar blir verklighet</p>
                </div>
                <img src="{{ asset('images/login.jpg') }}" alt="House in the suburbs">
            </div>
        </div>
    </section>
</main>

@include('footer')
