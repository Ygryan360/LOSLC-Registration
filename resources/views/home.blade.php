@extends('layouts.guest')
@section('title', 'Bienvenue')
@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1><span id="typed-text"></span></h1>
            <p>Rejoignez notre tournoi et montrez vos talents en Dev ou CyberSec !</p>
            <a href="{{ route('registration') }}" class="btn btn-primary">S'inscrire maintenant</a>
        </div>
    </section>

    <!-- Tournament Section -->
    <section class="tournament-section py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 shadow">
                        <img src="{{ asset('img/card_dev.jpg') }}" class="card-img-top" alt="Dev">
                        <div class="card-body">
                            <h3 class="card-title">Tournoi Dev</h3>
                            <p class="card-text">Affrontez d'autres passionnés de développement dans des défis de
                                programmation et de création de solutions open source innovantes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 shadow">
                        <img src="{{ asset('img/card_cybersec.jpg') }}" class="card-img-top" alt="CyberSec">
                        <div class="card-body">
                            <h3 class="card-title">Tournoi CyberSec</h3>
                            <p class="card-text">Testez vos compétences en sécurité informatique à travers des
                                challenges de hacking éthique et de protection des systèmes.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <a href="{{ route('registration') }}" class="btn btn-primary">S'inscrire
                    maintenant</a>
            </div>
        </div>
    </section>
@endsection
