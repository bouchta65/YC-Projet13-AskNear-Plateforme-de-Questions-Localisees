
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Non Trouvée - ASKNEAR Maroc</title> 
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gray-50 min-h-screen flex flex-col">
<main class="min-h-screen bg-gray-50 flex flex-col items-center justify-center px-4">
    <div class="max-w-2xl w-full text-center">
        <div class="mb-8 relative">
            <div class="flex justify-center">
                <div class="relative">
                    <svg class="w-48 h-48 md:w-64 md:h-64 text-blue-100" viewBox="0 0 100 100" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50" cy="50" r="50"/>
                    </svg>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <h1 class="text-6xl md:text-8xl font-bold text-blue-600">404</h1>
                    </div>
                </div>
            </div>
            
         
        </div>
        
        <!-- Error Message -->
        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">Page Non Trouvée</h2>
        <p class="text-gray-600 mb-8 text-lg">
            Désolé, nous n'avons pas pu localiser la page que vous cherchez sur notre carte.
        </p>
        
    
        
        <!-- Navigation Options -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
            <a href="/" class="flex flex-col items-center p-6 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow border-t-4 border-blue-500">
                <i class="fas fa-home text-blue-600 text-3xl mb-3"></i>
                <h3 class="font-medium text-gray-800 mb-1">Page d'accueil</h3>
                <p class="text-sm text-gray-500">Retournez à la page principale</p>
            </a>
            
            <a href="/questions/recent" class="flex flex-col items-center p-6 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow border-t-4 border-green-500">
                <i class="fas fa-question-circle text-green-600 text-3xl mb-3"></i>
                <h3 class="font-medium text-gray-800 mb-1">Questions récentes</h3>
                <p class="text-sm text-gray-500">Parcourez les dernières questions</p>
            </a>
        </div>
        
   
    </div>
    
    <!-- Footer Note -->
    <div class="mt-12 text-center text-gray-500 text-sm">
        <p>© 2025 GeoQuestions Maroc - Tous droits réservés</p>
    </div>
</main>
</body>
</html>
