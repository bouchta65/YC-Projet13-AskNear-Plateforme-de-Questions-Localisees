<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title> 
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gray-50 min-h-screen flex flex-col">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-10">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <!-- Logo et titre -->
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <div class="bg-blue-500 p-2 rounded-full mr-2">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <span class="font-bold text-xl text-gray-800">AskNear</span>
                    </div>
                </div>
    
                <!-- Liens de navigation -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="{{ url('/') }}"     class="{{ request()->is('/') ? 'text-blue-600 font-medium' : 'font-medium' }}">
                        <i class="fas fa-home mr-1"></i> Accueil
                    </a>
                    <a href="{{ url('populaires') }}" class="{{ request()->is('populaires') ? 'text-blue-600 font-medium' : 'font-medium' }}">
                        <i class="fas fa-fire mr-1"></i> Populaires
                    </a>
                    <a href="{{ url('favoris') }}" class="{{ request()->is('favoris') ? 'text-blue-600 font-medium' : 'font-medium' }}">
                        <i class="fas fa-star mr-1"></i> Favoris
                    </a>
                    <a href="{{ url('profile') }}" class="{{ request()->is('profile') ? 'text-blue-600 font-medium' : 'font-medium' }}">
                        <i class="fas fa-user mr-1"></i> profile
                    </a>
                    <a href="#" onclick="@auth toggleModal(true) @else toggleLoginModal(true) @endauth" class="bg-blue-600 text-white hover:bg-blue-700 px-4 py-2 rounded-md text-sm font-medium">
                        <i class="fas fa-plus-circle mr-1"></i> Poser une question
                    </a>
    
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="bg-red-500 text-white hover:bg-red-600 px-4 py-2 rounded-md text-sm font-medium">
                                <i class="fas fa-sign-out-alt mr-1"></i> Déconnexion
                            </button>
                        </form>
                    @endauth
    
                    @guest
                        <a href="{{ route('login') }}" class="bg-green-500 text-white hover:bg-green-600 px-4 py-2 rounded-md text-sm font-medium">
                            <i class="fas fa-sign-in-alt mr-1"></i> Connexion
                        </a>
                    @endguest
                </div>
    
                <div class="flex items-center md:hidden">
                    <button class="p-2 rounded-md text-gray-600 hover:text-gray-800 hover:bg-gray-100">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    

    <div >
        @yield('content') 
    </div>

    <footer class="bg-gray-800 text-gray-400">
        <div class="max-w-7xl mx-auto px-4 py-10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-500 p-2 rounded-full mr-2">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <span class="font-bold text-xl text-white">Questions Localisées</span>
                    </div>
                    <p class="text-sm mb-4">Plateforme de questions et réponses géolocalisées pour connecter les communautés locales.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-white font-medium mb-4">Navigation</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white">Accueil</a></li>
                        <li><a href="#" class="hover:text-white">Recherche</a></li>
                        <li><a href="#" class="hover:text-white">Questions populaires</a></li>
                        <li><a href="#" class="hover:text-white">Poser une question</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-white font-medium mb-4">Compte</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white">Se connecter</a></li>
                        <li><a href="#" class="hover:text-white">S'inscrire</a></li>
                        <li><a href="#" class="hover:text-white">Mon profil</a></li>
                        <li><a href="#" class="hover:text-white">Mes questions</a></li>
                        <li><a href="#" class="hover:text-white">Mes favoris</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-white font-medium mb-4">Informations</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white">À propos</a></li>
                        <li><a href="#" class="hover:text-white">Conditions d'utilisation</a></li>
                        <li><a href="#" class="hover:text-white">Politique de confidentialité</a></li>
                        <li><a href="#" class="hover:text-white">Nous contacter</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-10 pt-6 flex flex-col md:flex-row justify-between items-center">
                <p class="text-sm">© 2025 Questions Localisées. Tous droits réservés.</p>
                <p class="text-sm mt-2 md:mt-0">Conçu avec <i class="fas fa-heart text-red-500"></i> à Paris</p>
            </div>
        </div>
    </footer>
</body>
</html>
<div id="questionModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 backdrop-blur-md hidden transition-opacity duration-300">
    <div class="bg-white w-full max-w-lg p-6 rounded-2xl shadow-2xl transform scale-95 transition-all duration-300">
        <div class="flex justify-between items-center border-b pb-3">
            <h2 class="text-2xl font-bold text-gray-800">Publier une Question</h2>
            <button onclick="toggleModal(false)" class="text-gray-500 hover:text-gray-800 text-2xl font-bold">&times;</button>
        </div>

        <form action="{{ route('questions.save') }}" method="POST" class="space-y-5 mt-4">
            @csrf 
            
            <div>
                <label for="title" class="block text-gray-700 font-semibold mb-1">Titre</label>
                <input type="text" id="title" name="title" placeholder="Ex: Où trouver un bon café ?" 
                       class="w-full px-4 py-3 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-300 transition"
                       value="{{ old('title') }}" required>
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="content" class="block text-gray-700 font-semibold mb-1">Détail</label>
                <textarea id="content" name="content" rows="4" placeholder="Décrivez votre question..."
                          class="w-full px-4 py-3 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-300 transition" required>{{ old('content') }}</textarea>
                @error('content')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="location" class="block text-gray-700 font-semibold mb-1">Localisation</label>
                <select id="location" name="location"
                        class="w-full px-4 py-3 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-300 transition" required>
                    <option value="" disabled selected>Chargement...</option>
                </select>

                @error('location')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end space-x-3">
                <button type="button" onclick="toggleModal(false)" class="bg-gray-300 text-gray-700 px-5 py-2.5 rounded-lg hover:bg-gray-400 transition shadow-md">
                    Annuler
                </button>
                <button type="submit" class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-6 py-2.5 rounded-lg shadow-lg hover:shadow-xl transition">
                    Publier
                </button>
            </div>
        </form>
    </div>
</div>



<div id="loginModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 backdrop-blur-md hidden transition-opacity duration-300">
    <div class="bg-white w-full max-w-lg p-6 rounded-2xl shadow-2xl transform scale-95 transition-all duration-300">
            <h2 class="text-xl font-bold mb-4">Connexion requise</h2>
            <p class="mb-4">Vous devez être connecté pour poser une question.</p>
            <div class="flex justify-end">
                <button onclick="toggleLoginModal(false)" class="px-4 py-2 bg-gray-400 text-white rounded-md">Annuler</button>
                <a href="{{ route('login') }}" class="px-4 py-2 bg-blue-600 text-white rounded-md ml-2">Se connecter</a>
            </div>


    </div>
</div>

<div id="loginModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
 
</div>


<script src="{{ asset('assets/js/auth.js') }}"></script>  

<script src="{{ asset('assets/js/fitchCities.js') }}"></script>  

