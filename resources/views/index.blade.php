@extends('layouts.app')

@section('title', 'Home')


@section('content')

<x-nav>

</x-nav>
<div>
    <div class="relative">
        <img src="{{ asset('images/Ramon-inicio.jpg') }}" alt="" class="w-full h-auto">
        <div class="absolute inset-0 z-10 flex items-center justify-center">
            <h1 class="text-3xl font-bold text-white font-poppins">Physicus Academia</h1>
        </div>
        <div class="absolute inset-0 z-10 flex items-center justify-center gap-10 mt-40">
            <button class="text-xl font-bold text-green-400 ">Sign Up Today</button>
        </div>
    </div>


    <div class="h-full bg-slate-800">
        <div>
            <h1>mais Do Due Apenas Uma Academia </h1>
        </div>
        <div>
            <h1>Construa Seu treino </h1>
        </div>
    </div>

    <x-planos></x-planos>
</div>

@endsection