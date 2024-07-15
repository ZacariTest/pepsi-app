<body>
    @include('header')

    <section id="ayuda" class="py-4">
        <div class="container">
            <h1 class="text-center mb-4">Ayuda</h1>
            <p class="text-center mb-4">Aquí encontrarás información legal y datos de contacto para asistencia.</p>
            
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card border-primary bg-dark">
                        <div class="card-body">
                            <h3 class="card-title mb-3 text-white">Datos de Contacto</h3>
                            <p class="card-text text-white">Para cualquier consulta o asistencia, por favor contáctenos:</p>
                            <ul class="list-unstyled text-white">
                                <li><strong>Número de teléfono:</strong> +54 11 5555 5555</li>
                                <li><strong>Correo electrónico:</strong> contacto@pepsi.com.ar</li>
                                <li><strong>Sede regional:</strong> Buenos Aires, Argentina</li>
                                <li><strong>Horarios de atención:</strong> Lunes a Viernes de 9:00 a 18:00</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-md-12">
                    <h3 class="mb-3 text-white">Información Legal</h3>
                    <div class="card border-primary bg-dark">
                        <div class="card-body">
                            <p class="card-text text-white">
                                Todos los derechos reservados © 2024 PepsiCo, Inc. La información proporcionada en este sitio web es solo para fines informativos. Las marcas registradas son propiedad de sus respectivos titulares.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    @include('footer')
    @vite('resources/js/app.js')
</body>
