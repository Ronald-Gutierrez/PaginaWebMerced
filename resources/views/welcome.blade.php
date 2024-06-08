@extends('layouts.app')
@section('css')
<!-- Custom Styles -->
<head>
    <link rel="stylesheet" href="{{ asset('css/wssp.css') }}">
    <style>
        /* Estilo para las flechas del carrusel */
        .carousel-control-prev-icon, .carousel-control-next-icon {
            filter: invert(1); /* Invierte el color del ícono */
        }
        .bg-image {
            background-position: top center;
            height: 70vh;
            background-size: cover;
        }
        @media (max-width: 767px) {
            .carousel-item .row {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }
            .carousel-item .row .col-md-4 {
                flex: 0 0 100%; /* Hace que cada columna ocupe el ancho completo */
                max-width: 100%;
            }
        }


    </style>
</head>

@section('content')
<body class="bg-light">
    <section class="py-5  bg-image" style="background-image: url('{{ asset('img/fondo-merced.jpg') }}');">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 text-light">
                    <h1 class="display-1 fw-bold">La Merced</h1>
                    <p class="lead">¡Bienvenido a La Merced! 𝕽𝖊𝖘𝖙𝖔𝖗𝖆𝖓𝖙 𝖞 𝕮𝖆𝖋𝖊𝖙𝖊𝖗í𝖆 𝕷𝖆 𝕸𝖊𝖗𝖈𝖊𝖉</p>
                    <a href="{{ url('/producto') }}" class="btn btn-primary">Ver productos</a>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5 container">
    <div class="container py-5">
        <h2 class="text-center mb-4">Disfruta de estos riquísimos platos</h2>
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('img/saltado.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ asset('img/asao-pollo.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ asset('img/tallarin.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('img/sopa_cazuela.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ asset('img/tallarin.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ asset('img/asao-pollo.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-1 container">
    <div class="container py-5">
        <h2 class="text-center mb-4">Tenemos variedad de Servicios que podemos ofrecerte</h2>
        <div class="row justify-content-center text-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Café de Grano</h5>
                        <ul class="list-unstyled">
                            <li>Espresso - $2.200</li>
                            <li>Espresso Doble - $2.990</li>
                            <li>Americano - $2.200</li>
                            <li>Cortado - $2.990</li>
                            <li>Cortado Doble - $3.490</li>
                            <li>Cappuccino - $2.990</li>
                            <li>Cappuccino Doble - $3.490</li>
                            <li>Cappuccino Vainilla - $3.790</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Dulces y Bollería</h5>
                        <ul class="list-unstyled">
                            <li>Vienes - $3.490</li>
                            <li>Trozo de torta Irlandés - $3.990</li>
                            <li>Chessecake - $3.490</li>
                            <li>Latte - $2.990</li>
                            <li>Pie de Limón - $2.790</li>
                            <li>Moka - $3.790</li>
                            <li>Cheesecake - $3.490</li>
                            <li>Crossant - $3.490</li>
                            <li>Chocolate Caliente - $2.990</li>
                            <li>Magdalenas Don - $500</li>
                            <li>Café Helado - $4.490</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Variedad de Platos</h5>
                        <ul class="list-unstyled">
                            <li>Consomé de Ave - $6.990</li>
                            <li>Ensalada Surtida - $6.990</li>
                            <li>Carne Mechada - $6.990</li>
                            <li>Pollo al Horno - $6.990</li>
                            <li>Cerdo al Champiñón - $6.990</li>
                            <li>Papas al Romero - $6.990</li>
                            <li>Arroz - $6.990</li>
                            <li>Bebida Express - $6.990</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/1234567890" class="whatsapp-button" target="_blank" data-bs-toggle="tooltip" title="¿Necesitas ayuda?">
        <img src="{{ asset('img/logo-wssp.png') }}" alt="Contact us on WhatsApp">
    </a>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // Initialize tooltip
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>
    @include('layouts.footer')
@endsection