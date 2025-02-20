@extends('components.layout')
@section('title', 'Détail de la Question - GeoQuestions Maroc')
@section('content')

<!-- Breadcrumb navigation -->
<div class="bg-gray-100 py-3 border-b">
  <div class="max-w-6xl mx-auto px-4">
    <nav class="flex text-sm">
      <a href="/" class="text-blue-600 hover:text-blue-800">Accueil</a>
      <span class="mx-2 text-gray-500">/</span>
      <a href="/categories" class="text-blue-600 hover:text-blue-800">Catégories</a>
      <span class="mx-2 text-gray-500">/</span>
      <span class="text-gray-600">Détail de la question</span>
    </nav>
  </div>
</div>

<!-- Main content -->
<main class="max-w-6xl mx-auto px-4 py-8">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    <!-- Main content area -->
    <div class="md:col-span-2">
      <!-- Question card -->
      <div class="bg-white rounded-lg shadow-sm mb-6">
        <!-- Question header -->
        <div class="p-6 border-b">
          <div class="flex items-center justify-between mb-4">
            <div class="flex items-center">
              <img src="{{ asset('assets/images/avatars/default.jpg') }}" alt="Avatar" class="w-12 h-12 rounded-full object-cover mr-4">
              <div>
                <h5 class="font-medium">Amal Benkirane</h5>
                <p class="text-sm text-gray-500">Membre depuis 2023 • Rabat</p>
              </div>
            </div>
            <div class="text-sm text-gray-500">
              <span>Posté il y a 2 jours</span>
            </div>
          </div>
          
          <h1 class="text-2xl font-bold text-gray-800 mb-3">Où trouver les meilleurs restaurants de poisson frais à Essaouira?</h1>
          
          <!-- Question tags -->
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">Essaouira</span>
            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">Restaurants</span>
            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">Fruits de mer</span>
          </div>
          
          <!-- Question content -->
          <div class="text-gray-700 mb-6">
            <p>Je prévois un voyage à Essaouira le mois prochain et j'aimerais savoir quels sont les meilleurs restaurants où manger du poisson frais. Je recherche des endroits authentiques, pas trop touristiques, où les locaux vont.</p>
            <p class="mt-3">Avez-vous des recommandations de restaurants qui servent du poisson frais pêché du jour? Je suis particulièrement intéressé par les plats traditionnels marocains à base de poisson.</p>
          </div>
          
          <!-- Optional image -->
          <div class="mb-6 rounded-lg overflow-hidden">
            <img src="{{ asset('assets/images/essaouira-port.jpg') }}" alt="Port d'Essaouira" class="w-full h-auto">
            <p class="text-sm text-gray-500 mt-1">Port d'Essaouira</p>
          </div>
          
          <!-- Question actions -->
          <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4">
              <!-- Like button -->
              <button id="likeButton" class="flex items-center gap-1 text-gray-500 hover:text-blue-600">
                <i class="far fa-thumbs-up"></i>
                <span id="likeCount">24</span>
                <span class="sr-only md:not-sr-only text-sm">J'aime</span>
              </button>
              
              <!-- Comment counter -->
              <div class="flex items-center gap-1 text-gray-500">
                <i class="far fa-comment"></i>
                <span>8</span>
                <span class="sr-only md:not-sr-only text-sm">Réponses</span>
              </div>
              
              <!-- View counter -->
              <div class="flex items-center gap-1 text-gray-500">
                <i class="far fa-eye"></i>
                <span>137</span>
                <span class="sr-only md:not-sr-only text-sm">Vues</span>
              </div>
            </div>
            
            <!-- Share and save buttons -->
            <div class="flex items-center space-x-3">
              <button class="text-gray-500 hover:text-blue-600">
                <i class="far fa-share-square"></i>
                <span class="sr-only">Partager</span>
              </button>
              <button class="text-gray-500 hover:text-blue-600">
                <i class="far fa-bookmark"></i>
                <span class="sr-only">Sauvegarder</span>
              </button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Answer form -->
      <div class="bg-white rounded-lg shadow-sm mb-8 p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Votre réponse</h2>
        <form>
          <div class="mb-4">
            <textarea rows="4" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                   placeholder="Partagez votre connaissance locale..."></textarea>
          </div>
          
          <!-- Image upload option -->
          <div class="mb-4 flex items-center">
            <button type="button" class="flex items-center text-gray-600 hover:text-blue-600">
              <i class="far fa-image mr-2"></i>
              <span>Ajouter une photo</span>
            </button>
          </div>
          
          <div class="flex items-center justify-between">
            <div>
              <label class="flex items-center text-sm text-gray-600">
                <input type="checkbox" class="mr-2 h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                Recevoir des notifications pour cette question
              </label>
            </div>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium">
              Publier votre réponse
            </button>
          </div>
        </form>
      </div>
      
      <!-- Responses section -->
      <div>
        <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
          <span>Réponses</span>
          <span class="ml-2 px-2 py-1 bg-gray-200 text-gray-700 text-sm rounded-full">8</span>
        </h2>
        
        <!-- Sorting options -->
        <div class="flex items-center mb-6">
          <span class="text-gray-600 mr-2">Trier par:</span>
          <select class="border-none bg-transparent text-blue-600 focus:ring-0 cursor-pointer">
            <option>Plus récentes</option>
            <option>Plus anciennes</option>
            <option>Plus utiles</option>
          </select>
        </div>
        
        <!-- Individual responses -->
        <div class="space-y-6">
          <!-- Response 1 -->
          <div class="bg-white rounded-lg shadow-sm p-6 border-l-4 border-blue-500">
            <div class="flex items-center justify-between mb-4">
              <div class="flex items-center">
                <img src="{{ asset('assets/images/avatars/user1.jpg') }}" alt="Avatar" class="w-10 h-10 rounded-full object-cover mr-3">
                <div>
                  <h5 class="font-medium">Hassan Ouazzani</h5>
                  <p class="text-xs text-gray-500">Résident d'Essaouira • 15 ans</p>
                </div>
              </div>
              <div class="text-sm text-gray-500">
                <span>Il y a 1 jour</span>
              </div>
            </div>
            
            <div class="text-gray-700 mb-4">
              <p>Je vis à Essaouira depuis toujours, et je vous recommande vivement le restaurant "Le Petit Bleu" près du port. Les pêcheurs apportent leur prise chaque matin et le chef prépare des plats incroyables!</p>
              <p class="mt-2">Un autre endroit authentique est le petit restaurant "Chez Hassan" dans la médina. Ce n'est pas luxueux mais c'est là où nous, locaux, allons pour des tajines de poisson délicieux.</p>
            </div>
            
            <!-- Response actions -->
            <div class="flex items-center justify-between pt-3 border-t">
              <div class="flex items-center space-x-4">
                <button class="flex items-center gap-1 text-gray-500 hover:text-blue-600">
                  <i class="far fa-thumbs-up"></i>
                  <span>12</span>
                </button>
                <button class="flex items-center gap-1 text-gray-500 hover:text-red-600">
                  <i class="far fa-thumbs-down"></i>
                  <span>0</span>
                </button>
              </div>
              <button class="text-sm text-blue-600 hover:text-blue-800">
                Répondre
              </button>
            </div>
          </div>
          
          <!-- Response 2 -->
          <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between mb-4">
              <div class="flex items-center">
                <img src="{{ asset('assets/images/avatars/user2.jpg') }}" alt="Avatar" class="w-10 h-10 rounded-full object-cover mr-3">
                <div>
                  <h5 class="font-medium">Fatima Zahra</h5>
                  <p class="text-xs text-gray-500">Guide touristique • Essaouira</p>
                </div>
              </div>
              <div class="text-sm text-gray-500">
                <span>Il y a 2 jours</span>
              </div>
            </div>
            
            <div class="text-gray-700 mb-4">
              <p>Pour une expérience vraiment authentique, je conseille d'aller directement au port le matin (vers 10h) et de choisir votre poisson fraîchement pêché aux étals, puis de l'apporter à l'un des grilleurs sur place.</p>
              <p class="mt-2">Sinon, "La Découverte" dans la médina propose d'excellents tajines de poisson et sardines grillées dans une ambiance familiale.</p>
            </div>
            
            <!-- Image in response -->
            <div class="mb-4 rounded-lg overflow-hidden">
              <img src="{{ asset('assets/images/essaouira-grilled-fish.jpg') }}" alt="Poisson grillé" class="w-full h-auto">
            </div>
            
            <!-- Response actions -->
            <div class="flex items-center justify-between pt-3 border-t">
              <div class="flex items-center space-x-4">
                <button class="flex items-center gap-1 text-gray-500 hover:text-blue-600">
                  <i class="far fa-thumbs-up"></i>
                  <span>8</span>
                </button>
                <button class="flex items-center gap-1 text-gray-500 hover:text-red-600">
                  <i class="far fa-thumbs-down"></i>
                  <span>1</span>
                </button>
              </div>
              <button class="text-sm text-blue-600 hover:text-blue-800">
                Répondre
              </button>
            </div>
          </div>
          
          <!-- Load more responses button -->
          <div class="text-center mt-8">
            <button class="bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 px-5 py-3 rounded-md shadow-sm font-medium">
              Afficher plus de réponses
            </button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Sidebar -->
    <div class="md:col-span-1">
      <!-- Author card -->
      <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">À propos de l'auteur</h3>
        <div class="flex items-center mb-4">
          <img src="{{ asset('assets/images/avatars/default.jpg') }}" alt="Avatar" class="w-16 h-16 rounded-full object-cover mr-4">
          <div>
            <h5 class="font-medium">Amal Benkirane</h5>
            <p class="text-sm text-gray-500">Membre depuis avril 2023</p>
          </div>
        </div>
        <div class="flex justify-between text-sm text-gray-600 mb-4">
          <div class="text-center">
            <div class="font-medium">12</div>
            <div>Questions</div>
          </div>
          <div class="text-center">
            <div class="font-medium">36</div>
            <div>Réponses</div>
          </div>
          <div class="text-center">
            <div class="font-medium">218</div>
            <div>J'aimes</div>
          </div>
        </div>
        <button class="w-full bg-gray-100 hover:bg-gray-200 text-gray-800 py-2 rounded-md font-medium">
          Voir le profil
        </button>
      </div>
      
      <!-- Related questions -->
      <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Questions similaires</h3>
        <ul class="space-y-4">
          <li>
            <a href="#" class="block hover:bg-gray-50 p-2 -mx-2 rounded-md">
              <h4 class="font-medium text-gray-800 hover:text-blue-600">Meilleure période pour visiter Essaouira?</h4>
              <p class="text-sm text-gray-500 mt-1">14 réponses • Il y a 2 semaines</p>
            </a>
          </li>
          <li>
            <a href="#" class="block hover:bg-gray-50 p-2 -mx-2 rounded-md">
              <h4 class="font-medium text-gray-800 hover:text-blue-600">Où loger à Essaouira pour une famille?</h4>
              <p class="text-sm text-gray-500 mt-1">9 réponses • Il y a 1 mois</p>
            </a>
          </li>
          <li>
            <a href="#" class="block hover:bg-gray-50 p-2 -mx-2 rounded-md">
              <h4 class="font-medium text-gray-800 hover:text-blue-600">Transport de Marrakech à Essaouira</h4>
              <p class="text-sm text-gray-500 mt-1">22 réponses • Il y a 3 mois</p>
            </a>
          </li>
        </ul>
        <a href="#" class="block text-blue-600 hover:text-blue-800 text-sm font-medium mt-4">
          Voir plus de questions similaires
        </a>
      </div>
      
      <!-- Subscribe card -->
      <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg shadow-sm p-6">
        <h3 class="text-lg font-semibold mb-3">Restez informé</h3>
        <p class="text-blue-100 text-sm mb-4">Recevez des notifications pour les nouvelles réponses à cette question</p>
        <button class="w-full bg-white text-blue-600 hover:bg-gray-100 py-2 rounded-md font-medium mb-3">
          Suivre cette question
        </button>
        <div class="text-xs text-blue-200 text-center">
          Vous pouvez vous désabonner à tout moment
        </div>
      </div>
    </div>
  </div>
</main>

<!-- JavaScript for like functionality -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const likeButton = document.getElementById('likeButton');
    const likeCount = document.getElementById('likeCount');
    let isLiked = false;
    
    likeButton.addEventListener('click', function() {
      if (!isLiked) {
        // Like the question
        likeCount.textContent = parseInt(likeCount.textContent) + 1;
        likeButton.classList.add('text-blue-600');
        likeButton.classList.remove('text-gray-500');
        likeButton.querySelector('i').classList.remove('far');
        likeButton.querySelector('i').classList.add('fas');
        isLiked = true;
      } else {
        // Unlike the question
        likeCount.textContent = parseInt(likeCount.textContent) - 1;
        likeButton.classList.remove('text-blue-600');
        likeButton.classList.add('text-gray-500');
        likeButton.querySelector('i').classList.add('far');
        likeButton.querySelector('i').classList.remove('fas');
        isLiked = false;
      }
    });
  });
</script>

@endsection