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
                <h2>Vällkommen!</h2>
                <p>Logga in för att lägga upp din annons idag</p>
            </div>
            <div class="login-form">
                <form method="post" action="/login">
                    @csrf
                    <div>
                        <label for="email">Email</label><br>
                        <input name="email" id="email" type="email" />
                    </div>
                    <br>
                    <br>
                    <div>
                        <label for="password"> Password</label><br>
                        <input name="password" id="password" type="password" />
                    </div>

                    <button class="button" type="submit">Login</button>
                </form>
                <p>Inte medlem än? <a href="{{ route('register') }}">Skapa ett konto</a> idag!</p>
            </div>
        </div>
        <div class="image-container">
            <div class="frame">
                <div class="text-content">
                    <h2>Kollektiva</h2>
                    <p>Där dina <span>drömmar</span> blir <span>verklighet</span></p>
                </div>
                <img src="{{ asset('images/login.jpg') }}" alt="House in the suburbs">
            </div>
            </div>
    </section>
</main>

@include('footer')
