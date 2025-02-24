@extends('components.layout')
@section('title', 'GeoQuestions Maroc - Mes Favoris')
@section('content')

    <!-- Bannière Hero -->
    <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white">
        <div class="max-w-7xl mx-auto px-4 py-8">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">Mes Questions Favorites</h1>
            <p class="text-blue-100">Retrouvez toutes les questions que vous avez marquées comme favorites.</p>
        </div>
    </div>

    <!-- Contenu principal -->
    <main class="flex-grow">
        <div class="max-w-7xl mx-auto px-4 py-8">
            <!-- Contrôles de filtre -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
                <div class="flex items-center gap-2">
                    <h2 class="text-2xl font-bold text-gray-800">Questions sauvegardées</h2>
                    <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">{{$countFavoris}}</span>
                </div>
                <div class="flex flex-wrap gap-2">
                    <select class="bg-white border rounded-md px-3 py-2 text-sm text-gray-700">
                        <option>Trier par : Plus récentes</option>
                        <option>Plus anciennes</option>
                        <option>Plus de réponses</option>
                    </select>
                </div>
            </div>

            <!-- Liste des favoris -->
            <div class="space-y-4">
                @foreach ($favoris as $favori)
                <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="p-6">
                        <div class="flex justify-between items-start">
                            <h3 class="text-lg font-semibold text-gray-800 hover:text-blue-600">
                                <a href="/details/{{ $favori->question->id }}">{{ $favori->question->title }}</a>
                            </h3>
                            <button class="text-blue-500 hover:text-gray-400">
                                <i class="fas fa-bookmark"></i>
                            </button>
                        </div>
                        <p class="text-gray-600 mt-2">{{ $favori->question->content }}</p>
                        <div class="flex items-center text-sm text-gray-500 mt-4">
                            <div class="flex items-center mr-4">
                                <i class="fas fa-map-marker-alt mr-1 text-red-500"></i>
                                <span>{{ $favori->question->location }}</span>
                            </div>
                            <div class="flex items-center mr-4">
                                <i class="far fa-calendar-alt mr-1"></i>
                                <span>{{ $favori->question->published_at }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- État vide -->
                @if(count($favoris) == 0)
                <div class="text-center py-12">
                    <div class="bg-gray-100 rounded-full p-4 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <i class="far fa-bookmark text-2xl text-gray-400"></i>
                    </div>
                    <h3 class="text-lg font-medium text-gray-800 mb-2">Aucune question en favoris</h3>
                    <p class="text-gray-600 mb-6">Vous n'avez pas encore ajouté de questions à vos favoris.</p>
                    <a href="/" class="text-blue-600 hover:text-blue-800 font-medium">
                        Découvrir des questions <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
                @endif

                <!-- Pagination -->
                @if(count($favoris) > 0)
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
                @endif
            </div>
        </div>
    </main>

@endsection