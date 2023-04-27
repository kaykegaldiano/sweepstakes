@extends('auth.base')

@section('content')
    
<form action="{{ route('login') }}" method="POST" class="flex flex-col gap-4">

    @csrf

    @error('email')
        <div class="bg-white text-primary-dark p-4 rounded mb-4">
            {{ $message }}
        </div>
    @enderror

    <div class="flex flex-col gap-1">
        <label for="email" class="block text-sm font-medium text-white">E-mail</label>
        <input type="email" name="email" id="email" class="p-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Seu e-mail">
    </div>

    <div class="flex flex-col gap-1">
        <label for="password" class="block text-sm font-medium text-white">Senha</label>
        <input type="password" name="password" id="password" class="p-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Sua senha">
    </div>

    <button class="p-2 bg-white text-black w-full rounded-lg">Login</button>
</form>

@endsection