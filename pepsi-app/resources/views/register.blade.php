<body>
    @include('header')

    <div class="login-container">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <h2>Registrarse</h2>
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
                <label for="name">
                    <i class="fas fa-user"></i>
                    Nombre
                </label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">
                    <i class="fas fa-envelope"></i>
                    Correo electrónico
                </label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">
                    <i class="fas fa-lock"></i>
                    Contraseña
                </label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">
                    <i class="fas fa-lock"></i>
                    Confirmar contraseña
                </label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <button type="submit" class="btn-login">Registrarse</button>
            <a href="{{ route('login') }}">¿Ya tienes una cuenta? Inicia sesión aquí</a>
        </form>
    </div>

    @include('footer')
    @vite('resources/js/app.js')
</body>
