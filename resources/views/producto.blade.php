@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Productos</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="img/cafe-de-grano.jpg" class="card-img-top" alt="Café de Grano">
                    <div class="card-body">
                        <h5 class="card-title">Café de Grano</h5>
                        <p class="card-text">Disfruta de nuestro delicioso café de grano. Ofrecemos una variedad de opciones como espresso, americano, cappuccino, y más.</p>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/tortas.jpg" class="card-img-top" alt="Tortas y Dulces">
                    <div class="card-body">
                        <h5 class="card-title">Tortas y Dulces</h5>
                        <p class="card-text">Déjate tentar por nuestras irresistibles tortas y dulces. Desde tortas de diferentes sabores hasta pie de limón y cheesecake.</p>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/almuerzos.jpg" class="card-img-top" alt="Almuerzos y Sandwiches">
                    <div class="card-body">
                        <h5 class="card-title">Almuerzos y Sandwiches</h5>
                        <p class="card-text">Disfruta de nuestros deliciosos almuerzos y sandwiches. Ofrecemos opciones como carne mechada, completos, chorrillanas, y más.</p>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
