@if ($errors->any())
<p>
    <u>{{ $errors->first() }}</u>
</p>
@endif

<h1>Hi!</h1>
<p>Already a member? Log in here!</p>
<div class="signUp">
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

        <button type="submit">Login</button>
    </form>
</div>
