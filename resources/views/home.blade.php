<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linux & Open Source Lovers Community | Inscription au tournoi</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>

<body>
    <div>
        <div class="min-h-screen bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900">
            <div class="container mx-auto px-4 pt-20 pb-12">
                <div class="text-center">
                    <h1 class="text-5xl font-bold text-white mb-6">Linux &amp; Open Source Lovers Community</h1>
                    <p class="text-blue-300 text-xl mb-8">Premier tournoi de compétences techniques</p>
                    <div class="flex justify-center gap-8 mb-12 flex-wrap">
                        <div class="bg-blue-800/30 p-6 rounded-lg backdrop-blur-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-terminal w-12 h-12 text-blue-400 mx-auto mb-4">
                                <polyline points="4 17 10 11 4 5"></polyline>
                                <line x1="12" x2="20" y1="19" y2="19"></line>
                            </svg>
                            <h3 class="text-white font-semibold text-lg">Développement</h3>
                        </div>
                        <div class="bg-blue-800/30 p-6 rounded-lg backdrop-blur-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-shield w-12 h-12 text-blue-400 mx-auto mb-4">
                                <path
                                    d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                </path>
                            </svg>
                            <h3 class="text-white font-semibold text-lg">Cybersécurité</h3>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="lucide lucide-chevron-down w-8 h-8 text-blue-400 mx-auto animate-bounce">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </div>
            </div>
            <div class="container mx-auto px-4 py-16">
                @if (session('success'))
                    <div class="mb-8 text-center">
                        <span class="bg-green-500 text-white p-4 rounded-lg">
                            {{ session('success') }}
                        </span>
                    </div>
                @endif
                <div class="max-w-2xl mx-auto bg-gray-800/50 backdrop-blur-lg rounded-xl p-8 shadow-2xl">
                    <h2 class="text-3xl font-bold text-white mb-8 text-center">Inscription au Tournoi</h2>
                    <form class="space-y-6" method="POST" action="{{ route('registration.store') }}">
                        @csrf
                        <div>
                            <label for="name" class="block text-blue-300 mb-2">Nom Complet</label>
                            <input type="text" id="name" value="{{ old('name') }}" name="name"
                                class="w-full bg-gray-700 text-white rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required="">
                            @error('name')
                                <div class="text-red-500 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="phone" class="block text-blue-300 mb-2">Téléphone</label>
                            <input type="tel" id="phone" value="{{ old('phone') }}" name="phone"
                                class="w-full bg-gray-700 text-white rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required="">
                            @error('phone')
                                <div class="text-red-500 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="block text-blue-300 mb-2">Email</label>
                            <input type="email" id="email" value="{{ old('email') }}" name="email"
                                class="w-full bg-gray-700 text-white rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required="">
                            @error('email')
                                <div class="text-red-500 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="tournament_type" class="block text-blue-300 mb-2">
                                Type de Tournoi</label>
                            <select id="tournament_type" name="tournament_type"
                                class="w-full bg-gray-700 text-white rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required="">
                                <option disabled="" {{ old('tournament_type') ? '' : 'selected' }}>
                                    Sélectionnez une option</option>
                                <option value="Dev" {{ old('tournament_type') === 'Dev' ? 'selected' : '' }}>
                                    Développement</option>
                                <option value="CyberSec"
                                    {{ old('tournament_type') === 'CyberSec' ? 'selected' : '' }}>
                                    Cybersécurité</option>
                            </select>
                            @error('tournament_type')
                                <div class="text-red-500 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white cursor-pointer font-semibold py-3 px-6 rounded-lg transition duration-300">S'inscrire
                            au Tournoi
                        </button>
                    </form>
                </div>
            </div>
            <footer class="text-center py-8 text-blue-300">
                <p>© {{ date('Y') }} Linux &amp; Open Source Lovers Community. Tous droits réservés.</p>
            </footer>
        </div>
    </div>
</body>

</html>
