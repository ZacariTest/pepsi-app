<body>
    @include('header')

    <div class="container py-4">
        <div class="row">
            <div class="col text-center">
                <h2 class="section-title">Sobre Nosotros</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="image-container">
                    <img src="https://thefoodtech.com/wp-content/uploads/2024/02/pepsico.jpg" alt="Imagen sobre Pepsi" class="img-fluid styled-image">
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="https://pepsibottlingventures.com/wp-content/uploads/2022/12/C81I0569-scaled-e1671074138644.jpg" alt="Otra Imagen sobre Pepsi" class="img-fluid styled-image">
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="https://www.thespectrum.com/gcdn/-mm-/72d7a379e79c1e2d3c2cb6f4c6c56235a664d809/c=0-373-4032-2651/local/-/media/2018/04/30/TXNMGroup/StGeorge/636606901573860890-IMG-4161-1-.JPG?width=3200&height=1808&fit=crop&format=pjpg&auto=webp" alt="Otra Imagen sobre Pepsi" class="img-fluid styled-image">
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col text-center">
                <div class="about-container">
                    <p class="about-text">
                        Pepsi ha sido una marca icónica en la industria de las bebidas desde su creación en 1898. Con una rica historia de innovación y publicidad memorable, Pepsi ha mantenido su lugar como una de las bebidas más populares en todo el mundo. Desde el emblemático logo hasta las colaboraciones con celebridades, Pepsi continúa siendo una parte importante de la cultura pop. Nuestra misión es refrescar el mundo y ser una fuerza positiva para el cambio. Nos dedicamos a crear productos que nuestros consumidores adoran y que son accesibles para todos. Con un compromiso con la sostenibilidad y la responsabilidad social, Pepsi sigue innovando para un futuro mejor.
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Nuestra Historia</h5>
                        <p class="card-text">Desde 1898, Pepsi ha revolucionado la industria de bebidas con su enfoque innovador y marketing impactante.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Nuestra Misión</h5>
                        <p class="card-text">Refrescar el mundo y ser una fuerza positiva para el cambio, creando productos accesibles y amados por todos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Nuestro Futuro</h5>
                        <p class="card-text">Comprometidos con la sostenibilidad y la innovación, construimos un futuro mejor y más responsable.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('footer')
    @vite('resources/js/app.js')
</body>
