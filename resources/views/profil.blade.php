@extends('layouts.app')

@section('title', 'Profil')

@section('content')
<h1 class="tsxt-2xl mb-4">Profil {{$username}}</h1>
<div class="my-8">
    <a href="{{ route('dashboard', ['username' => $username]) }}"
        class="border border-gray-800 text-gray-800 text-sm px-4 py-2 rounded hover:bg-gray-100">
        ← Kembali
    </a>

</div>

<div class="bg-white border-black rounded-lg ">
    @foreach($profil as $item)
    <div class="flex items-center px-4 py-3 border-b border-gray-100 last:border-0 text-sm">
        <span class="text-gray-400 w-32 shrink-0">{{ $item['label'] }}</span>
        <span class="font-semibold">{{ $item['nilai'] }}</span>
    </div>
    @endforeach
</div>
<div class="flex gap-3 flex-wrap mt-6">
        <a href="{{ route('login') }}"
           class="bg-red-600 text-white text-sm px-4 py-2 rounded hover:bg-gray-700">
            Keluar
        </a>
    </div>
@endsection