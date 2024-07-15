<body>
    @include('header')

    <div class="login-container">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <h2>Iniciar sesión</h2>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="form-group">
                <label for="username">
                    <i class="fas fa-user"></i>
                    Usuario
                </label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">
                    <i class="fas fa-lock"></i>
                    Contraseña
                </label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn-login">Iniciar sesión</button>
            <a href="{{ route('password.request') }}">Olvidé mi contraseña</a>
        </form>

    </div>

    @include('footer')
    @vite('resources/js/app.js')
</body>
