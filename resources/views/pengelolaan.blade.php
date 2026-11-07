@extends('layouts.app')


@section('content')
<h1 class="text-2xl font-bold mb-4">Jadwal Mata Kuliah</h1>
<p class="text-gray-500 text-sm mb-6">Selamat datang, <strong>{{$username }}</strong></p>
<p>Total Mata Kuliah: <strong>{{ count($mata_kuliah) }}</strong></p>
<div class="my-8">
    <a href="{{ route('dashboard', ['username' => $username]) }}"
        class="border border-gray-800 text-gray-800 text-sm px-4 py-2 rounded hover:bg-gray-100">
        ← Kembali
    </a>

</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    @foreach ($mata_kuliah as $item)
    <div class="bg-gray-300 rounded-lg shadow p-4">
        <h2 class="text-lg font-semibold mb-2">{{ $item['nama'] }}</h2>
        <div class="bg-white rounded-lg px-4 py-4">

            <p class="text-sm mb-1">Dosen: {{ $item['dosen'] }}</p>
            <p class="text-sm mb-1">Hari: {{ $item['hari'] }}</p>
            <p class="text-sm mb-1">Waktu: {{ $item['jam'] }}</p>
            <p class="text-sm">Ruangan: {{ $item['ruang'] }}</p>
        </div>

    </div>
    @endforeach
</div>



@endsection