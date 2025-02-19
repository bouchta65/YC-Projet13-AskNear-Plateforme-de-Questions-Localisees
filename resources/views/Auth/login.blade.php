<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Questions Localisées</title>
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
            <h1 class="text-xl font-bold text-gray-800">Connexion</h1>
        </div>

        <!-- Formulaire -->
        <form action="/login" method="POST" class="p-6">
            <!-- Email -->
            <div class="mb-4">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                        <i class="fas fa-envelope text-gray-400 text-sm"></i>
                    </div>
                    <input type="email" name="email" placeholder="Adresse email" required
                           class="w-full py-2 pl-10 pr-3 border rounded-md text-sm">
                </div>
            </div>

            <!-- Mot de passe avec lien oublié -->
            <div class="mb-4">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                        <i class="fas fa-lock text-gray-400 text-sm"></i>
                    </div>
                    <input type="password" name="password" placeholder="Mot de passe" required
                           class="w-full py-2 pl-10 pr-3 border rounded-md text-sm">
                </div>
                <div class="flex justify-end mt-1">
                    <a href="/forgot-password" class="text-xs text-blue-600 hover:text-blue-800">
                        Mot de passe oublié?
                    </a>
                </div>
            </div>

            <!-- Se souvenir de moi -->
            <div class="flex items-center mb-4">
                <input id="remember_me" name="remember_me" type="checkbox" 
                       class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label for="remember_me" class="ml-2 text-sm text-gray-600">
                    Se souvenir de moi
                </label>
            </div>

            <!-- Bouton de connexion -->
            <button type="submit" 
                    class="w-full py-2 px-4 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-700 mb-4">
                <i class="fas fa-sign-in-alt mr-1"></i> Se connecter
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

            <!-- Lien d'inscription -->
            <div class="text-center text-sm">
                <p class="text-gray-600">
                    Pas encore de compte? <a href="/register" class="text-blue-600">Inscrivez-vous</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>