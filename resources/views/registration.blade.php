@extends('layouts.guest')
@section('title', 'Inscription')
@section('content')
    <!-- Form Section -->
    <section class="form-section my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="form-container">
                        <h2 class="text-center mb-4">Inscription au Tournoi</h2>
                        <form method="POST" action="{{ route('registration.store') }}">
                            @csrf
                            <!-- Nom -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Votre nom" value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Téléphone -->
                            <div class="mb-3">
                                <label for="phone" class="form-label">Téléphone</label>
                                <input type="tel" class="form-control" id="phone" name="phone"
                                    placeholder="Uniquement togolais, Ex: 22890123456" value="{{ old('phone') }}" required>
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Votre email" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Type de tournoi -->
                            <div class="mb-3">
                                <label for="tournament_type" class="form-label">Type de tournoi</label>
                                <select class="form-select" id="tournament_type" name="tournament_type" required>
                                    <option value="" disabled {{ old('tournament_type') ? '' : 'selected' }}>
                                        Choisissez une option</option>
                                    <option value="Dev" {{ old('tournament_type') === 'Dev' ? 'selected' : '' }}>Dev
                                    </option>
                                    <option value="CyberSec" {{ old('tournament_type') === 'CyberSec' ? 'selected' : '' }}>
                                        CyberSec</option>
                                </select>
                                @error('tournament_type')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Bouton Soumettre -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">S'inscrire</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
