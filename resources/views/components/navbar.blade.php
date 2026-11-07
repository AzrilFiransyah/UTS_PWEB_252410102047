@props(['username' => 'Mahasiswa'])
<nav class="bg-gray-800 text-white px-6 py-4">
    <span class="text-lg font-semibold">My Website</span>

    <a href="{{ route('dashboard', ['username' => $username]) }}" class="ml-4 hover:text-gray-300">Dashboard</a>
    <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="ml-4 hover:text-gray-300">Mata Kuliah</a>
    <a href="{{ route('profil', ['username' => $username]) }}" class="ml-4 hover:text-gray-300">Profil</a>

</nav>