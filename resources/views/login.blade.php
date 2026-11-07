@extends ('layouts.app')

@section('content')
<div class="max-w-sm mx-auto mt-16">

    @if(session('error'))
    <div class="bg-red-100 text-red-700 border border-red-300 rounded px-4 py-2 mb-4 text-sm">
        {{ session('error') }}
    </div>
    @endif

    <h1 class="text-2xl font-bold mb-4">Login</h1>
    <div class="bg-white p-6 rounded shadow-md">
        <form action="{{ route('tologin') }}" method="POST" >
            @csrf
            <div class="mb-4">
                <label for="username" class="block text-gray-700 font-semibold mb-2">Username</label>
                <input type="text" id="username" name="username" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Login</button>
        </form>
    </div>

</div>