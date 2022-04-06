@include('header')
@include('errors')
<main>
<section class="register">
    <div class="image-container">
        <div class="frame">
            <div class="text-content">
                <h2>Kollektiva</h2>
                <p>Där dina drömmar blir verklighet</p>
            </div>
            <img src="{{ asset('images/register.png') }}" alt="House in the suburbs">
        </div>
    </div>
    <div class="register-container">
        @if ($errors->any())
        <p>
            <p class="error">{{ $errors->first() }}</p>
        </p>
        @endif
        <div class="register-intro">
            <h2>Registrera dig!</h2>
        </div>
        <div class="register-form">
            <form method="post" action="/login">
                @csrf
                <div>
                    <label for="tel">Förnamn</label><br>
                    <input name="tel" id="tel" type="tel" placeholder="Ange ditt förnamn" />
                </div>
                <div>
                    <label for="tel">Efternamn</label><br>
                    <input name="tel" id="tel" type="tel" placeholder="Ange ditt efternamn" />
                </div>
                <div>
                    <label for="tel">Mobilnummer</label><br>
                    <input name="tel" id="tel" type="tel" placeholder="Ange ditt mobilnummer" />
                </div>
                <div>
                    <label for="email">E-postadress</label><br>
                    <input name="email" id="email" type="email" placeholder="Ange din e-postadress" />
                </div>
                <div>
                    <label for="password">Lösenord</label><br>
                    <input name="password" id="password" type="password" placeholder="Ange ditt lösenord" />
                </div>
                <div>
                    <label for="password">Bekräfta lösenord</label><br>
                    <input name="password" id="password" type="password" placeholder="Bekräfta ditt lösenord" />
                </div>
                <div class="button-container">
                    <button class="button" type="submit">Logga in</button>
                    <button class="button facebook" type="submit"><img src="{{ asset('images/google.svg') }}" alt="">Logga in med Google</button>
                    <button class="button google" type="submit"><img src="{{ asset('images/facebook.svg') }}" alt="">Logga in med Facebook</button>
                    <button class="button google" type="submit"><img src="{{ asset('images/mobilt-bankid.svg') }}" alt="">Logga in med Facebook</button>
                </div>
            </form>
            <p>Redan medlem? <a href="{{ route('login') }}">Logga in</a> här!</p>
        </div>
    </div>
</section>


</main>

@include('footer')
