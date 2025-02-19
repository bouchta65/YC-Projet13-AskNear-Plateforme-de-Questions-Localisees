<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Questions Localisées</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">
    <div class="bg-white rounded-lg shadow-md max-w-md w-full">
        <!-- En-tête -->
        <div class="text-center p-5 bg-blue-50 rounded-t-lg border-b">
            <div class="inline-block bg-blue-500 p-2 rounded-full mb-2">
                <i class="fas fa-map-marker-alt text-white text-xl"></i>
            </div>
            <h1 class="text-xl font-bold text-gray-800">Créer un compte</h1>
        </div>

        <!-- Formulaire -->
        <form action="/register" method="POST" class="p-6">
            <!-- Nom et Prénom (côte à côte) -->
            <div class="grid grid-cols-2 gap-3 mb-4">
                <div>
                    <input type="text" name="firstname" placeholder="Prénom" required
                           class="w-full py-2 px-3 border rounded-md text-sm">
                </div>
                <div>
                    <input type="text" name="lastname" placeholder="Nom" required
                           class="w-full py-2 px-3 border rounded-md text-sm">
                </div>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                        <i class="fas fa-envelope text-gray-400 text-sm"></i>
                    </div>
                    <input type="email" name="email" placeholder="Email" required
                           class="w-full py-2 pl-10 pr-3 border rounded-md text-sm">
                </div>
            </div>

            <!-- Mot de passe (côte à côte) -->
            <div class="grid grid-cols-2 gap-3 mb-4">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                        <i class="fas fa-lock text-gray-400 text-sm"></i>
                    </div>
                    <input type="password" name="password" placeholder="Mot de passe" required
                           class="w-full py-2 pl-10 pr-3 border rounded-md text-sm">
                </div>
                <div>
                    <input type="password" name="password_confirmation" placeholder="Confirmation" required
                           class="w-full py-2 px-3 border rounded-md text-sm">
                </div>
            </div>

            <!-- Localisation avec bouton -->
            <div class="mb-4">
                <div class="flex items-center gap-2">
                    <div class="relative flex-1">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                            <i class="fas fa-map-marker-alt text-gray-400 text-sm"></i>
                        </div>
                        <input type="text" name="location" placeholder="Votre localisation" 
                               class="w-full py-2 pl-10 pr-3 border rounded-md text-sm">
                    </div>
                    <button type="button" class="bg-gray-100 p-2 rounded-md text-blue-600 hover:bg-gray-200" title="Utiliser ma position">
                        <i class="fas fa-crosshairs"></i>
                    </button>
                </div>
            </div>

            <!-- Conditions -->
            <div class="flex items-start mb-4">
                <input id="terms" name="terms" type="checkbox" required
                       class="mt-0.5 h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label for="terms" class="ml-2 text-xs text-gray-600">
                    J'accepte les <a href="#" class="text-blue-600">conditions d'utilisation</a> et la 
                    <a href="#" class="text-blue-600">politique de confidentialité</a>
                </label>
            </div>

            <!-- Boutons -->
            <button type="submit" 
                    class="w-full py-2 px-4 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-700 mb-4">
                Créer mon compte
            </button>

            <!-- Options sociales -->
            <div class="grid grid-cols-2 gap-3 mb-3">
                <a href="#" class="flex justify-center items-center py-2 bg-white border rounded-md text-sm hover:bg-gray-50">
                    <i class="fab fa-google text-red-600 mr-2"></i> Google
                </a>
                <a href="#" class="flex justify-center items-center py-2 bg-white border rounded-md text-sm hover:bg-gray-50">
                    <i class="fab fa-facebook text-blue-600 mr-2"></i> Facebook
                </a>
            </div>

            <!-- Lien de connexion -->
            <div class="text-center text-sm">
                <p class="text-gray-600">
                    Déjà inscrit? <a href="/login" class="text-blue-600">Connectez-vous</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>