@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-1">Dashboard</h1>
<p class="text-gray-500 text-sm mb-6">Selamat datang, <strong>{{$username }}</strong></p>

<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    @foreach ($statistik as $item)
    <div class="bg-gray-300 rounded-lg shadow p-4 flex items-center">
        <div class="text-3xl mr-4">{{ $item['icon'] }}</div>
        <div>
            <p class="text-black text-sm">{{ $item['label'] }}</p>
            <p class="text-xl font-bold">{{ $item['nilai'] }}</p>
        </div>
    </div>
    @endforeach
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
    @foreach (array_slice($mata_kuliah, 0, 3) as $item)
    <div class="bg-gray-200 rounded-xl shadow-sm p-4 hover:bg-gray-300 transition-colors">
        <h2 class="text-lg font-bold text-gray-800 mb-2 px-1">{{ $item['nama'] }}</h2>
        
        <div class="bg-white rounded-lg p-4 space-y-1.5 text-sm text-gray-700">
            <p><span class="font-semibold text-gray-600">Dosen:</span> {{ $item['dosen'] }}</p>
            <p><span class="font-semibold text-gray-600">Hari:</span> {{ $item['hari'] }}</p>
            <p><span class="font-semibold text-gray-600">Waktu:</span> {{ $item['jam'] }}</p>
            <p><span class="font-semibold text-gray-600">Ruangan:</span> {{ $item['ruang'] }}</p>
        </div>
    </div>
    @endforeach
</div>
<div class="mt-6 text-center">
    <a href="{{ route('pengelolaan', ['username' => request()->query('username')]) }}" 
       class="inline-block bg-blue-600 text-white text-sm font-medium px-6 py-2.5 rounded-lg hover:bg-blue-700 transition-colors shadow-sm">
        Lihat Semua Jadwal →
    </a>
</div>

</div>

@endsection