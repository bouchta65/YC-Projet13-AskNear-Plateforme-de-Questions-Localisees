@extends('components.layout')
@section('title', 'GeoQuestions Maroc - Plateforme Communautaire')
@section('content')


    <div class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex flex-col md:flex-row items-center">
                <div class="relative">
                    <img src="{{ asset('assets/images/profile.jpg') }}" alt="Profile" class="rounded-full w-32 h-32 object-cover border-4 border-white shadow-lg">
                    <button class="absolute bottom-0 right-0 bg-blue-500 text-white rounded-full p-2 shadow-lg hover:bg-blue-600">
                        <i class="fas fa-camera"></i>
                    </button>
                </div>
                
                <!-- Profile Info -->
                <div class="md:ml-8 mt-4 md:mt-0 text-center md:text-left">
                    <h1 class="text-2xl font-bold text-gray-900">{{ Auth::user()->name }}</h1>
                    <div class="mt-2 flex flex-wrap justify-center md:justify-start gap-2">
                        <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">{{$countQuestions}} Questions</span>
                        <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">{{$countReponses}} Reponses</span>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="md:ml-auto mt-4 md:mt-0 flex space-x-3">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors" onclick="document.getElementById('editProfileModal').classList.remove('hidden')" >
                        Edit Profile
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="space-y-6">
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="mt-4 space-y-3">
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-user w-5"></i>
                            <span>{{ Auth::user()->name }}</span>
                        </div>
                        
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-envelope w-5"></i>
                            <span>{{ Auth::user()->email }}</span>
                        </div>
                        
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-calendar-alt w-5"></i>
                            <span>{{ Auth::user()->created_at->format('F j, Y') }}</span>
                        </div>
                    </div>
                </div>
                

            </div>

           
            <div class="md:col-span-2 space-y-6">
                <!-- Status Update -->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex space-x-4">
                       <h1 class="text-lg font-semibold text-gray-800 hover:text-blue-600">My Questions :</h1>
                    </div>
                </div>

               
                <div class="space-y-6">
                    <!-- Post 1 -->
                    @foreach ($questions as $question)
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center space-x-4">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 hover:text-blue-600">
                                    <a href="/details/{{ $question->id }}">{{ $question->title }}</a>
                                </h3>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-600">
                            {{ $question->content }}
                        </p>
                        <div class="mt-4 flex items-center space-x-4 text-gray-500">
                            <button class="flex items-center space-x-2 hover:text-blue-500">
                                <i class="far fa-comment"></i>
                                <span>{{$question->reponses_count}}</span>
                            </button>
                            <form action="{{ route('question.delete', $question->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE') 
                                <button type="submit" class="flex items-center space-x-2 text-red-600 hover:text-red-800">
                                    <i class="far fa-trash-alt"></i>
                                    <span>Delete</span>
                                </button>
                            </form>
                
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


  <div id="editProfileModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50">
        <div class="relative top-20 mx-auto p-5 border w-full max-w-2xl shadow-lg rounded-lg bg-white">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-xl font-semibold text-gray-900">Edit Profile</h3>
                <button onclick="document.getElementById('editProfileModal').classList.add('hidden')" 
                        class="text-gray-400 hover:text-gray-500">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <form class="space-y-6">
                <!-- Basic Information -->
                <div class="space-y-4">
                    <h4 class="font-medium text-gray-900">Basic Information</h4>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Full name</label>
                        <input type="email"
                               class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" 
                               class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                   

                

                <!-- Action Buttons -->
                <div class="flex items-center justify-end space-x-3 pt-4 border-t">
                    <button type="button" 
                            onclick="document.getElementById('editProfileModal').classList.add('hidden')"
                            class="px-4 py-2 text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200">
                        Cancel
                    </button>
                    <button type="submit" 
                            class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('editProfileModal');
            if (event.target == modal) {
                modal.classList.add('hidden');
            }
        }
    </script>
@endsection
