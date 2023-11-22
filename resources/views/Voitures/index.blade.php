@extends('layouts.app')

@section('content')
    <div class="flex items-center gap-10 mb-6">
        <h1 class="text-3xl">Nos voitures</h1>
        <a href="/voitures/creer" class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm">Créer une catégorie</a>
    </div>

    <div class="grid grid-cols-3 gap-6">
        @foreach ($voitures as $voiture)
            <div class="border p-4 rounded shadow">
                <h2>{{ $voiture->marque}}</h2>
            </div>
        @endforeach
    </div>
@endsection