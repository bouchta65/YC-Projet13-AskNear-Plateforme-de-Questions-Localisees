<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de passe oublié - Questions Localisées</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">
    <div class="bg-white rounded-lg shadow-md max-w-md w-full">
        <!-- En-tête -->
        <div class="text-center p-5 bg-blue-50 rounded-t-lg border-b">
            <div class="inline-block bg-blue-500 p-2 rounded-full mb-2">
                <i class="fas fa-key text-white text-xl"></i>
            </div>
            <h1 class="text-xl font-bold text-gray-800">Réinitialiser le mot de passe</h1>
        </div>

        <!-- Message de confirmation -->
        @if (session('status'))
            <div class="bg-green-100 text-green-800 p-3 rounded-md mx-6 mt-4">
                {{ session('status') }}
            </div>
        @endif

        <!-- Formulaire -->
        <form method="POST" action="{{ route('password.email') }}" class="p-6">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                        <i class="fas fa-envelope text-gray-400 text-sm"></i>
                    </div>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus autocomplete="email"
                           class="w-full py-2 pl-10 pr-3 border rounded-md text-sm" placeholder="Adresse e-mail">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Bouton envoyer -->
            <button type="submit"
                    class="w-full py-2 px-4 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-700 mt-4">
                <i class="fas fa-paper-plane mr-1"></i> Envoyer le lien de réinitialisation
            </button>

            <!-- Lien retour à la connexion -->
            <div class="text-center text-sm mt-4">
                <p class="text-gray-600">
                    <a href="{{ route('login') }}" class="text-blue-600">Retour à la connexion</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>
