@extends('layouts.app')
@section('css')
<!-- Custom Styles -->
<head>
    <link rel="stylesheet" href="{{ asset('css/wssp.css') }}">
    <style>
    .section-background {
        background-color: #f2f2f2; /* Set your desired background color */
        padding: 20px; /* Add padding to create space between the content and the background */
    }
</style>

</head>

@section('content')
    <body class="bg-light">

        <section class="py-5">
            <div class="container">
                <div class="row">
                <div class="col-md-6">
                    <h2 style="font-size: 2.5em;">Encuéntranos</h2>
                    <p>Estamos a un click de distancia.</p>
                    <p>
                        <a href="https://wa.me/51984247724" target="_blank" class="btn btn-success" style="color: white; text-decoration: none;">
                            LLÁMANOS AL +56 9 6621 0617
                        </a>
                    </p>
                </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Contáctanos
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputName" class="form-label">Nombre y Apellido</label>
                                        <input type="text" class="form-control" id="exampleInputName" style="width: 50%;">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 50%;">
                                        <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputTelf" class="form-label">Teléfono/Celular</label>
                                        <input type="tel" class="form-control" id="exampleInputTelf" style="width: 50%;">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputMsj" class="form-label">Mensaje</label>
                                        <textarea class="form-control" id="exampleInputMsj" style="width: 100%; height: 150px;"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Enviar mensaje</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    <!-- Sección del mapa y detalles del restaurante con fondo -->
    <section class="py-5 section-background">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Mapa de Google Maps -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3336.793805686594!2d-71.24881218480172!3d-29.90261098192319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x968a3724b033bfa9%3A0xe64f1b193161ce0a!2sAv.%20Balmaceda%20365%2C%20La%20Serena%2C%20Regi%C3%B3n%20de%20Coquimbo!5e0!3m2!1sen!2scl!4v1622714763797!5m2!1sen!2scl" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-md-6">
                    <!-- Detalles del restaurante -->
                    <h2>Encuentranos en:</h2>
                    <p>Avenida Balmaceda #365, La Serena, Chile</p>
                    <p><strong>Teléfono:</strong> +56 9 6621 0617</p>
                    <p><strong>Email:</strong> chiledelta@outlook.com</p>
                    <p><strong>Estado:</strong> Cerrado ahora</p>
                    <p><strong>Calificación:</strong> Aún sin calificación (0 opiniones)</p>
                </div>
            </div>
        </div>
    </section>

        <!-- Bootstrap JS Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script>
            // Initialize tooltip
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        </script>
        <!-- WhatsApp Floating Button -->
        <a href="https://wa.me/+56966210617" class="whatsapp-button" target="_blank" data-bs-toggle="tooltip" title="¿Necesitas ayuda?">
            <img src="{{ asset('img/logo-wssp.png') }}" alt="Contact us on WhatsApp">
        </a>
    </body>
    @include('layouts.footer')
@endsection