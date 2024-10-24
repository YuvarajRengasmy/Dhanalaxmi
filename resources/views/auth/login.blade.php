<form method="POST" action="{{ route('login') }}">
    @csrf
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" required autofocus>
    </div>

    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div>
        <input type="checkbox" name="remember">
        <label for="remember">Remember Me</label>
    </div>

    <div>
        <button type="submit">
            Login
        </button>
    </div>
</form>
