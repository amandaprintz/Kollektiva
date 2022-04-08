@include('partials.header')
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
            <form method="post" action="{{ route('register') }}">
                @csrf
                <div>
                    <label for="first_name">Förnamn</label><br>
                    <input name="first_name" id="first_name" type="first_name" placeholder="Ange ditt förnamn" value="{{ old('first_name') }}"/>
                </div>
                <div>
                    <label for="last_name">Efternamn</label><br>
                    <input name="last_name" id="last_name" type="last_name" placeholder="Ange ditt efternamn" value="{{ old('last_name') }}" />
                </div>
                <div>
                    <label for="tel">Mobilnummer</label><br>
                    <input name="tel" id="tel" type="tel" placeholder="Ange ditt mobilnummer" value="{{ old('tel') }}"/>
                </div>
                <div>
                    <label for="email">E-postadress</label><br>
                    <input name="email" id="email" type="email" placeholder="Ange din e-postadress" value="{{ old('email') }}" />
                </div>
                <div>
                    <label for="password">Lösenord</label><br>
                    <input name="password" id="password" type="password" placeholder="Ange ditt lösenord" />
                </div>
                <div>
                    <label for="password_confirmation">Bekräfta lösenord</label><br>
                    <input name="password_confirmation" id="password_confirmation" type="password" placeholder="Bekräfta ditt lösenord" />
                </div>
                <div class="button-container">
                    <button class="button" type="submit">Logga in</button>
                    <button class="button facebook" type="submit"><img src="{{ asset('images/google.svg') }}" alt="">Logga in med Google</button>
                    <button class="button google" type="submit"><img src="{{ asset('images/facebook.svg') }}" alt="">Logga in med Facebook</button>
                    <button class="button google" type="submit"><img src="{{ asset('images/mobilt-bankid.svg') }}" alt="">Logga in med BankID</button>
                </div>
            </form>
            <p>Redan medlem? <a href="{{ route('login') }}">Logga in</a> här!</p>
        </div>
    </div>
</section>


</main>

@include('partials.footer')
