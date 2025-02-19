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
                    <a href="#" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">
                        <i class="fas fa-home mr-1"></i> Accueil
                    </a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">
                        <i class="fas fa-fire mr-1"></i> Populaires
                    </a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">
                        <i class="fas fa-star mr-1"></i> Favoris
                    </a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">
                        <i class="fas fa-user mr-1"></i> Profil
                    </a>
                    <a href="#" class="bg-blue-600 text-white hover:bg-blue-700 px-4 py-2 rounded-md text-sm font-medium">
                        <i class="fas fa-plus-circle mr-1"></i> Poser une question
                    </a>
                </div>

                <!-- Profil mobile -->
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
