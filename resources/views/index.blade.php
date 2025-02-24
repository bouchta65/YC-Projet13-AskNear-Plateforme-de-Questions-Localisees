@extends('components.layout')
@section('title', 'GeoQuestions Maroc - Plateforme Communautaire')
@section('content')


    <!-- Bannière Hero -->
    <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white">
        <div class="max-w-7xl mx-auto px-4 py-12 md:py-16">
            <div class="grid md:grid-cols-2 gap-28 items-center">
                <div>
                    <h1 class="text-3xl md:text-4xl font-bold mb-4">Trouvez des réponses locales à vos questions</h1>
                    <p class="text-blue-100 mb-8">Posez des questions et recevez des réponses de personnes proches de chez vous. Partagez vos connaissances locales.</p>
                    
                    <!-- Barre de recherche -->
                    <div class="bg-white rounded-lg shadow-md p-1 flex items-center">
                        <div class="pl-3 pr-2">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                        <input type="text" placeholder="Rechercher des questions par mots-clés ou lieu..." 
                               class="flex-1 py-2 px-2 focus:outline-none text-gray-700">
                        <button class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700">
                            Rechercher
                        </button>
                    </div>
                </div>
                <div class="hidden md:flex justify-center">
                    <img src="{{ asset('assets/images/logo3.png') }}" alt="Questions localisées illustration" class=" max-w-full h-66" />
                </div>
            </div>
        </div>
    </div>

    <!-- Contenu principal -->
    <main class="flex-grow">
        <div class="max-w-7xl mx-auto px-4 py-8">
            <!-- Statistiques -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                <div class="bg-white rounded-lg shadow-sm p-6 flex items-center">
                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                        <i class="fas fa-question text-blue-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Questions publiées</p>
                        <p class="text-2xl font-bold text-gray-800">{{$countQuestions}}</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-sm p-6 flex items-center">
                    <div class="bg-green-100 p-3 rounded-full mr-4">
                        <i class="fas fa-comment text-green-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Réponses partagées</p>
                        <p class="text-2xl font-bold text-gray-800">{{$countReponses}}</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-sm p-6 flex items-center">
                    <div class="bg-purple-100 p-3 rounded-full mr-4">
                        <i class="fas fa-users text-purple-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Utilisateurs</p>
                        <p class="text-2xl font-bold text-gray-800">{{$countUsers}}</p>
                    </div>
                </div>
            </div>

            <!-- Contrôles de filtre -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
                <h2 class="text-2xl font-bold text-gray-800">Questions récentes près de vous</h2>
                <div class="flex flex-wrap gap-2">
                    <select class="bg-white border rounded-md px-3 py-2 text-sm text-gray-700">
                        <option>Trier par : Plus récentes</option>
                        <option>Plus proches</option>
                        <option>Plus populaires</option>
                        <option>Plus de réponses</option>
                    </select>
                    <select class="bg-white border rounded-md px-3 py-2 text-sm text-gray-700">
                        <option>Distance : 5 km</option>
                        <option>10 km</option>
                        <option>25 km</option>
                        <option>50 km</option>
                        <option>Toutes</option>
                    </select>
                </div>
            </div>

            <!-- Liste de questions -->
            <div class="space-y-4">

                @foreach ($questions as $question)
                   
                <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="p-6">
                        <div class="flex justify-between items-start">
                            <h3 class="text-lg font-semibold text-gray-800 hover:text-blue-600">
                                <a href="/details/{{ $question->id }}">{{ $question->title }}</a>
                            </h3>
                            <form action="{{ route('question.favori', $question->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="text-gray-400 hover:text-blue-500">
                                <i class="far fa-bookmark"></i>
                            </button>
                        </form>
                        </div>
                        <p class="text-gray-600 mt-2">{{ $question->content }}</p>
                        <div class="flex items-center text-sm text-gray-500 mt-4">
                            <div class="flex items-center mr-4">
                                <i class="fas fa-map-marker-alt mr-1 text-red-500"></i>
                                <span>{{ $question->location }}</span>
                            </div>
                            <div class="flex items-center mr-4">
                                <i class="far fa-calendar-alt mr-1"></i>
                                <span>{{ $question->published_at }}</span>
                            </div>
                            <div class="flex items-center mr-4">
                                <i class="far fa-comment mr-1"></i>
                                <span>{{$question->reponses_count}} réponses</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            

                <!-- Plus de questions -->
                <div class="text-center mt-8">
                    <button class="bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 px-5 py-3 rounded-md shadow-sm font-medium">
                        Afficher plus de questions
                    </button>
                </div>
            </div>
        </div>
    </main>

    <!-- Section "Questions populaires" -->
    <section class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-gray-800 mb-8 text-center">Questions populaires cette semaine</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                @foreach ($popularQuestions as $question)
                <div class="bg-white rounded-lg shadow-sm p-5 hover:shadow-md transition-shadow">
                    <div class="flex items-start">
                        <div class="bg-yellow-100 rounded-full p-3 mr-4">
                            <i class="fas fa-award text-yellow-600"></i>
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-800 hover:text-blue-600">
                                <a href="/details/{{ $question->id }}">{{$question->title}}</a>
                            </h3>
                            <p class="text-sm text-gray-500 mt-1">{{$question->reponses_count}} réponses</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Appel à l'action -->
    <section class="bg-blue-600 text-white py-12">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Vous avez une question locale ?</h2>
            <p class="text-blue-100 mb-8">Rejoignez notre communauté de 1 500+ utilisateurs qui s'entraident chaque jour pour résoudre des problèmes locaux.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button onclick="@auth toggleModal(true) @else toggleLoginModal(true) @endauth" class="bg-blue-500 text-white hover:bg-blue-700 border border-blue-300 px-6 py-3 rounded-md font-medium">
                    <i  class="fas fa-question-circle mr-2"></i> Poser une question
                </button>
            </div>
        </div>
    </section>

    

    <!-- Bouton flottant pour poser une question (mobile) -->
    <div class="md:hidden fixed right-4 bottom-4">
        <button class="bg-blue-600 text-white p-4 rounded-full shadow-lg hover:bg-blue-700">
            <i class="fas fa-plus text-xl"></i>
        </button>
    </div>

@endsection





     