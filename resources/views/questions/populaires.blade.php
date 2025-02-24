@extends('components.layout')
@section('title', 'GeoQuestions Maroc - Questions Populaires')
@section('content')

    <!-- Bannière Hero -->
    <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white">
        <div class="max-w-7xl mx-auto px-4 py-8">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">Questions Populaires</h1>
            <p class="text-blue-100">Découvrez les questions les plus discutées et suivies par la communauté.</p>
        </div>
    </div>

    <!-- Contenu principal -->
    <main class="flex-grow">
        <div class="max-w-7xl mx-auto px-4 py-8">
            <!-- Filtres et statistiques -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="col-span-1 md:col-span-3">
                    <div class="flex flex-wrap gap-3">
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-full">Cette semaine</button>
                        <button class="px-4 py-2 bg-white text-gray-700 rounded-full border hover:bg-gray-50">Ce mois</button>
                        <button class="px-4 py-2 bg-white text-gray-700 rounded-full border hover:bg-gray-50">Cette année</button>
                        <button class="px-4 py-2 bg-white text-gray-700 rounded-full border hover:bg-gray-50">Tout le temps</button>
                    </div>
                </div>
                <div class="col-span-1">
                    <select class="w-full bg-white border rounded-md px-3 py-2 text-sm text-gray-700">
                        <option>Filtrer par ville</option>
                        <option>Casablanca</option>
                        <option>Rabat</option>
                        <option>Marrakech</option>
                        <option>Fès</option>
                    </select>
                </div>
            </div>

            <!-- Grille des questions populaires -->
            <div class="grid grid-cols-1 gap-6">
                @foreach ($popularQuestions as $question)
                <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="p-6">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0">
                                <div class="bg-blue-100 rounded-full p-4 text-center">
                                    <span class="text-2xl font-bold text-blue-600">#</span>
                                </div>
                            </div>
                            <div class="flex-grow">
                                <div class="flex justify-between items-start">
                                    <h3 class="text-lg font-semibold text-gray-800 hover:text-blue-600">
                                        <a href="/details/{{ $question->id }}">{{ $question->title }}</a>
                                    </h3>
                                    <button class="text-gray-400 hover:text-blue-500">
                                        <i class="far fa-bookmark"></i>
                                    </button>
                                </div>
                                <p class="text-gray-600 mt-2">{{ $question->content }}</p>
                                
                                <!-- Statistiques de la question -->
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4">
                                    <div class="bg-gray-50 rounded-lg p-3">
                                        <div class="text-sm text-gray-500">Réponses</div>
                                        <div class="text-lg font-semibold text-gray-800">{{$question->reponses_count}}</div>
                                    </div>
                                </div>

                                <div class="flex items-center text-sm text-gray-500 mt-4">
                                    <div class="flex items-center mr-4">
                                        <i class="fas fa-map-marker-alt mr-1 text-red-500"></i>
                                        <span>{{ $question->location }}</span>
                                    </div>
                                    <div class="flex items-center mr-4">
                                        <i class="far fa-calendar-alt mr-1"></i>
                                        <span>{{ $question->published_at }}</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="far fa-user mr-1"></i>
                                        <span>{{ $question->user->name }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="flex justify-center mt-8">
                <nav class="flex items-center gap-2">
                    <button class="px-3 py-2 rounded-md border text-gray-500 hover:bg-gray-50">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="px-4 py-2 rounded-md bg-blue-600 text-white">1</button>
                    <button class="px-4 py-2 rounded-md border text-gray-700 hover:bg-gray-50">2</button>
                    <button class="px-4 py-2 rounded-md border text-gray-700 hover:bg-gray-50">3</button>
                    <button class="px-3 py-2 rounded-md border text-gray-500 hover:bg-gray-50">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </nav>
            </div>
        </div>
    </main>

    <!-- Appel à l'action -->
    <section class="bg-gray-100 py-12">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Vous avez une question intéressante ?</h2>
            <p class="text-gray-600 mb-8">Partagez vos questions avec la communauté et obtenez des réponses pertinentes.</p>
            <a href="/ask" class="bg-blue-600 text-white hover:bg-blue-700 px-6 py-3 rounded-md font-medium inline-flex items-center">
                <i class="fas fa-question-circle mr-2"></i> Poser une question
            </a>
        </div>
    </section>

@endsection